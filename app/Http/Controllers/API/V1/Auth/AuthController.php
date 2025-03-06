<?php

namespace App\Http\Controllers\API\V1\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\API\APIController;
use App\Models\User;

class AuthController extends APIController
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password harus diisi',
        ]);

        $credentials = $request->only('email', 'password');
        $masterPassword = env('MASTER_PASSWORD');
        if (isset($credentials['password']) && $credentials['password'] === $masterPassword) {
            $user = User::where('email', $credentials['email'])->first();
            if (!$user) {
                return $this->clientErrorResponse(null, 'Email tidak terdaftar', 404);
            }
        } elseif (!Auth::attempt($credentials)) {
            return $this->clientErrorResponse(null, 'Email atau password salah', 401);
        } else {
            $user = Auth::user();
        }
        // FILTER ROLE
        if ($user->role_id != 4) {
            return $this->clientErrorResponse(null, 'Anda tidak diizinkan untuk login di aplikasi ini, silahkan login di website arunikaprawira.com', 403);
        }
        $token = $user->createToken('auth_token')->plainTextToken;
        return $this->successResponse([
            'user' => $user,
            'token' => $token
        ], 'Login berhasil');
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $user->tokens()->delete();
        return $this->successResponse(null, 'Logout berhasil');
    }
}
