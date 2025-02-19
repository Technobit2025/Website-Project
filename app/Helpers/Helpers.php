<?php

namespace App\Helpers;

use App\Models\User;
use App\Models\Country;
use App\Models\Attachment;

class Helpers
{
    public static function isUserLogin()
    {
        return auth()?->check();
    }

    public static function getCurrentUserId()
    {
      if (self::isUserLogin()) {
        return auth()?->user()?->id;
      }
    }

    public static function getMedia($id)
    {
      return Attachment::find($id);
    }

    public static function getCountryCode(){
      return Country::get(["calling_code", "id", "iso_3166_2", 'flag'])->unique('calling_code');
    }

    public static function getUser()
    {
        $user = User::with('roles')->where('system_reserve' ,'!=', 1)->latest()->take(5)->get();
        return $user;
    }
}