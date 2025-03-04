<?php

namespace App\Services;

use App\Models\AndroidOtpToken;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Notifications\AndroidOtpNotification;

class AndroidOtpService
{
    public function sendOtp($email)
    {
        $user = User::where('email', $email)->first();
        if (!$user) {
            return false;
        }

        $otp = rand(1000, 9999);
        AndroidOtpToken::updateOrCreate(
            ['email' => $email], 
            ['otp' => $otp, 'created_at' => now()]
        );

        $user->notify(new AndroidOtpNotification($otp));

        return true;
    }

    public function verifyOtp($email, $otp)
    {
        $otpRecord = AndroidOtpToken::where('email', $email)->where('otp', $otp)->first();
        
        if (!$otpRecord || $otpRecord->isExpired()) {
            return false;
        }

        $otpRecord->delete();

        return true;
    }
}
