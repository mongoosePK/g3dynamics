<?php

namespace App\Http\Models;

use DB;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Model;
use App\Exceptions\Handler;
use TCG\Voyager\Models\Setting;



class AdminSettingsModel extends Model
{
	public static function getSettingsValue($key = null)
	{
		try{	
			//grab data from db
			$data = Setting::where('key', $key);
			$data = $data->firstOrFail();

			if ( empty($data) ){
				$error = "\nWe were unable to determine a type for the values passed in. \nKey: ".$key.", \nClass: ".$class.", \nType: ".$type."";
    			throw new Exception($error);
				return;
			}

			return $data;
		} catch (Exception $e) {
			Handler::logAnException($e);
		}
	}
}
