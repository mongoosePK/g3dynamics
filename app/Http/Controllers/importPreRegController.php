<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Models\Signups;
use App\Http\Models\Teams;
use App\Http\Models\Account;
use App\Http\Models\AccountRoles;
use App\Exceptions\Handler;
use App\Http\Models\PasswordGen;

use Illuminate\Http\Request;

class importPreRegController extends Controller
{
    public function get_data() {

        $file_n = public_path() . '/files/mammoth_prereg.csv';
        $file = fopen($file_n, "r");
        $csv_data = [];

        $count = 0;
        while ( ($data = fgetcsv($file, 200, ",") ) !== FALSE ){

            $count++;
            if ($count == 1) { continue; }

            $csv_data[] = [
                "division" => $data[0],
                "email" => $data[2],
                "date_paid" => $data[9],
                "paid" => $data[10],
                "stripe_id" => $data[12],
            ];
        }

        fclose($file);

        foreach($csv_data as $d){

            $query = DB::table('mammoth_sniper_team_members')
            ->where('member1_email', $d['email'])
            ->get();

            foreach($query as $q){

                $team = new Teams();
                $team->team_type = $d['division'];
                $team->stripe_payment_id = $d['stripe_id'];
                $team->created_at = $q->created_at;
                $team->updated_at = $q->updated_at;
                $team->amount_paid = $d['paid'];
                $team->save();

                $member1 = new Signups();
                $member1->first_name = $q->member1_first_name;
                $member1->last_name = $q->member1_last_name;
                $member1->address = $q->member1_address;
                $member1->city = $q->member1_city;
                $member1->state = $q->member1_state;
                $member1->zip = $q->member1_zip;
                $member1->phone = $q->member1_phone;
                $member1->email = $q->member1_email;
                $member1->team_id = $team->id;
                $member1->shirt_size = $q->member1_size;
                $member1->past_competitor = 'N/A';
                $member1->past_num_of_years = 0;
                $member1->save();

                $member2 = new Signups();
                $member2->first_name = $q->member2_first_name;
                $member2->last_name = $q->member2_last_name;
                $member2->address = $q->member2_address;
                $member2->city = $q->member2_city;
                $member2->state = $q->member2_state;
                $member2->zip = $q->member2_zip;
                $member2->phone = $q->member2_phone;
                $member2->email = $q->member2_email;
                $member2->team_id = $team->id;
                $member2->shirt_size = $q->member2_size;
                $member2->past_competitor = 'N/A';
                $member2->past_num_of_years = 0;
                $member2->save();

                $team = Teams::find($team->id);
                $team->member1 = $member1->id;
                $team->member2 = $member2->id;
                $team->save();

            }

        }

        
    }

    public function createUserAccounts()
    {
        $members = Signups::all();

        foreach($members as $member){

            $rand = rand(8, 16);
            $random_password = PasswordGen::randomPassGen($rand);

            $name = $member->first_name . " " . $member->last_name;

            $user = Account::create([
                'name' => $name->name,
                'email' => $member->email,
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
        }
    }
}
