<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordGen extends Model
{
    //

     /**
     * generates random password for new users, based on passed in length of password to be generated.
     *
     * @param int $length
     * @return string
     */
    public static function randomPassGen($length)
    {
        $random_string = '';
        $valid_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

        $num_valid_chars = strlen($valid_chars);

        for ($i = 0; $i < $length; $i++) {
            $random_pick = mt_rand(1, $num_valid_chars);
            $random_char = $valid_chars[$random_pick - 1];
            $random_string .= $random_char;
        }

        return $random_string;
    }

}
