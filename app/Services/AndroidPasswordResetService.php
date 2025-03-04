<?php

namespace App\Services;

use App\Models\User;
use App\Models\AndroidPasswordResetToken;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Notifications\AndroidResetPasswordNotification;

class AndroidPasswordResetService
{
    public function createResetToken($email)
    {
        $user = User::where('email', $email)->first();
        if (!$user) {
            return false;
        }

        $token = Str::random(60);
        AndroidPasswordResetToken::updateOrCreate(
            ['email' => $email], 
            ['token' => $token, 'created_at' => now()]
        );

        $user->notify(new AndroidResetPasswordNotification($token));

        return true;
    }

    public function resetPassword($email, $token, $newPassword)
    {
        $resetToken = AndroidPasswordResetToken::where('email', $email)->where('token', $token)->first();
        
        if (!$resetToken || $resetToken->isExpired()) {
            return false;
        }

        $user = User::where('email', $email)->first();
        $user->password = Hash::make($newPassword);
        $user->save();

        $resetToken->delete();

        return true;
    }
}
