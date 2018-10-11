<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use App\Http\Models\AdminSettingsModel;
use App\Http\Models\Gallery;
use TCG\Voyager\Models\Post;
use Carbon\Carbon;
use Auth;
use App\Http\Models\Signups;
use App\Http\Models\Teams;

class PagesController extends Controller
{
    public function index()
    {
        $tracking_id = AdminSettingsModel::getSettingsValue('site.google_analytics_tracking_id');
        $images = Gallery::where('active',true)->orderBy('order','asc')->get();
        $posts = Post::where('status', 'published')->get();
        $user = Auth::user();

        //return view
        return view('home')
                    ->with('tracking_id', $tracking_id->value)
                    ->with('images', $images)
                    ->with('user', $user)
                    ->with('posts', $posts);
    }

    public function getPage($slug = null)
    {
        if($slug === 'mammoth-sniper-challenge'){
            $page = Page::where('slug', $slug)->where('status', 'active');
            $page = $page->firstOrFail();
            $tracking_id = AdminSettingsModel::getSettingsValue('site.google_analytics_tracking_id');
            $date = Carbon::now()->setTimezone('America/Chicago')->format('Y-m-d');

            if (Auth::user()) {
                $user = Auth::user();
                if($user){
                    $arr = explode(' ', $user->name);
                    $user->first_name = $arr[0];
                    $user->last_name = $arr[1];
                }


                $signup = Signups::where('email', $user->email)->get();
                $amount_due = $this->amountDue($date, $signup);
                $pre = $this->preRegOpen($date, '2019-02-01');

            } else {
                $signup = '';
                $user = '';
                $amount_due = $this->amountDue($date);
                $pre = $this->preRegOpen($date, '2019-02-01');
            }

            //return view
            return view('page')
                        ->with('page', $page)
                        ->with('date', $date)
                        ->with('user', $user)
                        ->with('amount', $amount_due)
                        ->with('pre', $pre)
                        ->with('tracking_id', $tracking_id->value);
        } else {
            $page = Page::where('slug', $slug)->where('status', 'active');
            $page = $page->firstOrFail();
            return view('qa')->with('page', $page);
        }
    }

    private function preRegOpen($date, $cutoff = null)
    {
        if ( isset($cutoff) ) {
            if ($date < $cutoff) {
                return true;
            } else {
                return false;
            }
        }
    }

    private function amountDue($date, $signup = null)
    {
        if($signup !== null) {
            if (!$signup->isEmpty()) {
                
                
                foreach($signup as $s){
                    $team = Teams::find($s->team_id)->get();
                
                    foreach($team as $t){
                        if( $date < '2019-02-01') {
                            $amount_due = 100 - $t->amount_paid;
                        } else {
                            $amount_due = 700 - $t->amount_paid;
                        }
                    }
                }
                
            } else {
                if( $date < '2019-02-01') {
                    $amount_due = 100;
                } else {
                    $amount_due = 700;
                }
            }
        }  else {
            if( $date < '2019-02-01') {
                $amount_due = 100;
            } else {
                $amount_due = 700;
            }
        }

        return $amount_due;
    }
}
