<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\MainController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'remember' => 'boolean', // Add validation for remember me
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
                return redirect()->back()->withErrors([
                    'email' => 'Email tidak terdaftar',
                ])->withInput($request->except('password'));
            }

            Auth::login($user, $request->filled('remember')); // Use remember me
            $request->session()->regenerate();
            return app(MainController::class)->index();
        }

        if (Auth::attempt($credentials, $request->filled('remember'))) { // Use remember me
            session()->regenerate();
            return app(MainController::class)->index();
        }

        return redirect()->back()->withErrors([
            'email' => 'Email atau password salah',
        ])->withInput($request->except('password'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
