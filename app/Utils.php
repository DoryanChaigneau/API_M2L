<?php

namespace App;

use Symfony\Component\HttpFoundation\Request;
use Illuminate\Database\Eloquent\Model;

class Utils extends Model
{
    /**
     * @param int $length
     * @return string
     */
    public static function random_string($length = 64)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * @param Request $request
     * @return string|string[]
     */
    public static function token(Request $request) {
        $bearer_token = $request->header('Authorization');
        return str_replace('Bearer', '',$bearer_token);
    }

    /**
     * @param Request $request
     * @return bool
     */
    public static function isValidConnection(Request $request)
    {
        $token = self::token($request);
        $ligue = Ligue::where('token','=',$token)->first();
        if(!is_null($ligue)) {
            return $ligue;
        }
        return false;
    }
}
