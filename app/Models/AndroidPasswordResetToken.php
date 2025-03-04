<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class AndroidPasswordResetToken extends Model
{
    protected $fillable = ['email', 'token', 'created_at'];
    public $timestamps = false;

    public function isExpired()
    {
        return Carbon::parse($this->created_at)->addMinutes(30)->isPast();
    }
}
