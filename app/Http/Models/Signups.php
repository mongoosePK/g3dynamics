<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Exceptions\Handler;

class Signups extends Model
{
    //
    protected $table = 'mammoth_signups';
    protected $fillable = ['first_name', 'last_name', 'phone', 'address', 'city', 'state', 'zip', 'email', 'team_id', 'shirt_size', 'past_competitor', 'past_num_of_years'];

    public function team()
    {
        return $this->belongsTo('App\Http\Models\Teams');
    }
}
