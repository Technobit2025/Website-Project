<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class AndroidOtpToken extends Model
{
    protected $table = 'otps';
    protected $fillable = ['email', 'otp', 'created_at'];
    public $timestamps = false;

    public function isExpired()
    {
        return Carbon::parse($this->created_at)->addMinutes(5)->isPast();
    }
}
