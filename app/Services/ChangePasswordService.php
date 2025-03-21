<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ChangePasswordService
{
    public function changePassword($currentPassword, $newPassword): bool
    {
        $user = Auth::user();

        if (!$user || !Hash::check($currentPassword, $user->password)) {
            return false;
        }

        $user->password = $newPassword;

        /** @var \App\Models\User $user **/
        
        return $user->save();
    }
}
