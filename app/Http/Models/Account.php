<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Account extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'avatar', 'password','role_id'];
    
    /**
     * check request vs existing to determine, what, if any... values have changed and return those changed values in an array
     *
     * @return array
     */
    public static function processUpdate($request, $account)
    {
        $new_account_values = [];
        $file_name = "";

        if ($request->hasfile('avatar')) {
            $file_name = \Uuid::generate(4).'.'.$request->file('avatar')->getClientOriginalExtension();
            $request->file('avatar')->move(public_path().'/storage/', $file_name);
            $new_account_values['avatar'] = $file_name;
        }

        if (Account::areValuesTheSame($account->name, $request->name) === false) {
            $new_account_values['name'] = $request->name;
        }

        if (Account::areValuesTheSame($account->email, $request->email) === false) {
            $new_account_values['email'] = $request->email;
        }

        if (\Hash::check($account->password, $request->password) === false && isset($request->password)) {
            $new_account_values['password'] = bcrypt($request->password);
        }

        return Account::updateAccount($account, $new_account_values);
    }

    /**
     * checks if values are identical
     *
     * @return boolean
     */
    private static function areValuesTheSame($old, $new)
    {
        $old = strtolower($old);
        $new = strtolower($new);

        if($old === $new){
            return true;
        } else {
            return false;
        }
    }

    /**
     * run update on account if needed
     *
     * @return array
     */
    private static function updateAccount($account, $new_account_values)
    {
        $message = [];

        if  (!empty($new_account_values))   {
            if ($account->update($new_account_values) === true) {
                $message = [
                    "body" => "Account was updated.",
                    "type" => "success",
                ];
            } else {
                
                $message = [
                    "body" => "Account could not be updated.",
                    "type" => "danger",
                ];
            }

        } else {
            $message = [
                "body" => "Account values were not changed.",
                "type" => "warning",
            ];
        }

        return $message;
    }
}
