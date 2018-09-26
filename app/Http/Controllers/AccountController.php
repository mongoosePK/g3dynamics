<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\AdminSettingsModel;
use Auth;
use TCG\Voyager\Models\User;
use App\Http\Models\Account;
use App\Http\Models\AccountRoles;
use App\Exceptions\Handler;
use App\Http\Models\PasswordGen;
use Mail;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::check()){
            return redirect()->route('voyager.login');
        } else {
            $dataTypeContent = Auth::user();
            return view('admin.account.account')->with('dataTypeContent', $dataTypeContent);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
                'name' => 'required|regex:/^[(a-zA-Z\s)]+$/u', // alpha - only contain letters
                'email' => 'required|email|unique:users',
        ]);

        $rand = rand(8, 16);
        $random_password = PasswordGen::randomPassGen($rand);

        $user = Account::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($random_password),
            'role_id' => 2,
        ]);

        AccountRoles::create([
            "user_id" => $user->id,
            "role_id" => 2
        ]);

        Mail::send('email.new', ['user' => $user, 'genpass' => $random_password], function ($m) use ($user) {
            $m->from('customerservice@gruntstyle.com', 'G3Dynamics');

            $m->to($user->email, $user->name)->subject('Account Created');
        });
        
         return redirect()->route('voyager.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
                'avatar' => 'image',
                'name' => 'required|regex:/^[(a-zA-Z\s)]+$/u',
                'email' => 'required|email|max:255',
                'password' => 'nullable|min:8|confirmed|regex:"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$"'

        ]);

        $account = Account::find($id);

        $message = Account::processUpdate($request, $account);

        return redirect()->route('voyager.account.home', ['id' => $id])->with(['message' => $message['body'], 'alert-type' => $message['type']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('voyager.login');
    }
}
