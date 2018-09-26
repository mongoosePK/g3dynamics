<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class AccountRoles extends Model
{
    protected $table = 'user_roles';
    protected $fillable = ['user_id','role_id'];
    public $timestamps = false;
}
