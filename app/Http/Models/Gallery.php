<?php

namespace App\Http\Models;

use DB;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Model;
use App\Exceptions\Handler;

class Gallery extends Model
{
    protected $table = 'gallery';
}
