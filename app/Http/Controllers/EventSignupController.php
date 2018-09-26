<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Error\Card;
use Cartalyst\Stripe\Stripe;
use Illuminate\Support\Facades\Input;
use App\Http\Models\Teams;
use App\Http\Models\Signups;
use Mail;
use Carbon\Carbon;


class EventSignupController extends Controller
{
    public function processSignUp(Request $request, $amount, $pre)
    {
        
        $this->validate($request, [
                'member1_first_name' => 'required|regex:/^[(a-zA-Z\s)]+$/u',
                'member1_last_name' => 'required|regex:/^[(a-zA-Z\s)]+$/u',
                'member1_phone' => 'required|regex:/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/',
                'member1_address' => 'required|regex:/^[(a-zA-Z0-9\s)]+$/u',
                'member1_city' => 'required|regex:/^[(a-zA-Z0-9\s)]+$/u',
                'member1_state' => 'required',
                'member1_zip' => 'required|numeric|digits:5',
                'member1_email' => 'required|email|max:255|unique:mammoth_signups,email',
                'member1_pastcompetitor' => 'required',
                'member1_pastyears' => 'required|numeric',
                'member2_first_name' => 'required|regex:/^[(a-zA-Z\s)]+$/u',
                'member2_last_name' => 'required|regex:/^[(a-zA-Z\s)]+$/u',
                'member2_phone' => 'required|regex:/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/',
                'member2_address' => 'required|regex:/^[(a-zA-Z0-9\s)]+$/u',
                'member2_city' => 'required|regex:/^[(a-zA-Z0-9\s)]+$/u',
                'member2_state' => 'required',
                'member2_zip' => 'required|numeric|digits:5',
                'member2_email' => 'required|email|max:255|unique:mammoth_signups,email',
                'member2_pastcompetitor' => 'required',
                'member2_pastyears' => 'required|numeric',
                'cc_name' => 'required|regex:/^[(a-zA-Z\s)]+$/u',
                'cc_number' => 'required|regex:/^[(0-9)]+$/u',
                'cc_expire_month' => 'required',
                'cc_expire_year' => 'required',
                'cc_cvv' => 'required|regex:/^[(0-9)]+$/u',
                'team_type' => 'required',
        ]);

        $stripe = Stripe::make(config('services.stripe_test.key'));
        
        try{

            $token = $stripe->tokens()->create([
                'card' => [
                'number' => $request->get('cc_number'),
                'exp_month' => $request->get('cc_expire_month'),
                'exp_year' => $request->get('cc_expire_year'),
                'cvc' => $request->get('cc_cvv'),
                ]
            ]);


            if (!isset($token['id'])) {
                \Session::put('error','Token Not Created');
                return redirect()->back()->withInput(Input::all());
            }


            $charge = $stripe->charges()->create([
                'card' => $token['id'],
                'currency' => 'USD',
                'amount' => $amount,
                'description' => 'Pre-Register for Mammoth',
            ]);

            if($charge['paid'] === true){

                if($request->member1_pastcompetitor === 'Yes'){
                    $m1_past_years = $request->member1_pastyears;
                } else {
                    $m1_past_years = 0;
                }

                if($request->member2_pastcompetitor === 'Yes'){
                    $m2_past_years = $request->member2_pastyears;
                } else {
                    $m2_past_years = 0;
                }

                $team = new Teams();
                $team->team_type = $request->team_type;
                $team->stripe_payment_id = $charge['id'];
                $team->created_at = Carbon::now();
                $team->updated_at = Carbon::now();
                $team->amount_paid = $amount;
                $team->save();

                $member1 = new Signups();
                $member1->first_name = $request->member1_first_name;
                $member1->last_name = $request->member1_last_name;
                $member1->address = $request->member1_address;
                $member1->city = $request->member1_city;
                $member1->state = $request->member1_state;
                $member1->zip = $request->member1_zip;
                $member1->phone = $request->member1_phone;
                $member1->email = $request->member1_email;
                $member1->team_id = $team->id;
                $member1->shirt_size = $request->member1_size;
                $member1->past_competitor = $request->member1_pastcompetitor;
                $member1->past_num_of_years = $m1_past_years;
                $member1->save();

                $member2 = new Signups();
                $member2->first_name = $request->member2_first_name;
                $member2->last_name = $request->member2_last_name;
                $member2->address = $request->member2_address;
                $member2->city = $request->member2_city;
                $member2->state = $request->member2_state;
                $member2->zip = $request->member2_zip;
                $member2->phone = $request->member2_phone;
                $member2->email = $request->member2_email;
                $member2->team_id = $team->id;
                $member2->shirt_size = $request->member2_size;
                $member2->past_competitor = $request->member2_pastcompetitor;
                $member2->past_num_of_years = $m2_past_years;
                $member2->save();

                $team = Teams::find($team->id);
                $team->member1 = $member1->id;
                $team->member2 = $member2->id;
                $team->save();

                if((bool)$pre === true){
                    $template = "email.premammoth";
                    $subject = "Mammoth Sniper Challenge Pre-Registration";
                    $emails = [$request->member1_email, $request->member2_email];
                    $this->sendEmail($subject, $emails, $template, $request->all());

                } else {
                    $template = "email.mammoth";
                    $subject = "Mammoth Sniper Challenge Registration";
                    $emails = [$request->member1_email, $request->member2_email];
                    $this->sendEmail($subject, $emails, $template, $request->all());
                }

                 \Session::put('success','Team Registered!');
                return redirect()->back();
            } else {
                \Session::put('error', $charge['outcome']['reason']);
                return redirect()->back()->withInput(Input::all());
            }

        } catch (\Exception $e) {
            \Session::put('error',$e->getMessage());
            return redirect()->back()->withInput(Input::all());
        } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
            \Session::put('error',$e->getMessage());
            return redirect()->back()->withInput(Input::all());
        } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
            \Session::put('error',$e->getMessage());
            return redirect()->back()->withInput(Input::all());
        }
    }

    public function sendEmail($subject, $emails, $template, $request)
    {
		Mail::send($template, [$request], function($m) use ($subject, $emails) {
			$m->from( 'customerservice@gruntstyle.com', 'Grunt Style LLC' );
			$m->to( $emails )->subject( $subject );
		} );
    }
}
