<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ChangePasswordService
{
    public function changePassword($user, $currentPassword, $newPassword): bool
    {
        if (!$user) {
            return false;
        }

        if (!Hash::check($currentPassword, $user->password)) {
            return false;
        }

        $user->password = $newPassword;
        $saved = $user->save();

        return $saved;
    }
}
