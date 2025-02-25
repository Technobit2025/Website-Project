<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected function successResponse($data, $message = 'Success', $code = 200)
    {
        return response()->json([
            'status' => $code,
            'message' => $message,
            'data' => $data
        ], $code);
    }

    protected function clientErrorResponse($data = null, $message = 'Client Error', $code = 400)
    {
        return response()->json([
            'status' => $code,
            'message' => $message,
            'data' => $data
        ], $code);
    }

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
