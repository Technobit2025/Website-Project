<?php

namespace App\Http\Controllers\API\V1\Auth;

use App\Http\Controllers\API\APIController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AndroidResetPasswordController extends APIController
{
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json(['message' => 'Email tidak ditemukan'], 404);
        }

        // Logging password lama
        Log::info('Password lama: ' . $user->password);

        // Update password dengan metode yang lebih aman
        $user->setRawAttributes([
            'password' => Hash::make($request->password)
        ]);
        $user->save();

        // Logging password baru
        Log::info('Password baru (hashed): ' . $user->password);
        Log::info('Password berhasil diupdate untuk email: ' . $request->email);

        return response()->json(['message' => 'Password berhasil direset'], 200);
    }
}
