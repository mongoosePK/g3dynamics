<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Exceptions\Handler;

class Teams extends Model
{
    //
    protected $table = 'mammoth_teams';
    protected $fillable = ['team_type', 'amount_paid'];

    public function member()
    {
        return $this->hasOne('App\Http\Models\Signups');
    }
}
