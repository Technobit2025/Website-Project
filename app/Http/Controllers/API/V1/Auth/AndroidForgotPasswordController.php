<?php

namespace App\Http\Controllers\API\V1\Auth;

use App\Http\Controllers\API\APIController;
use Illuminate\Http\Request;
use App\Services\AndroidOtpService;

class AndroidForgotPasswordController extends APIController
{
    protected $otpService;

    public function __construct(AndroidOtpService $otpService)
    {
        $this->otpService = $otpService;
    }

    public function requestOtp(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        if ($this->otpService->sendOtp($request->email)) {
            return response()->json(['message' => 'OTP telah dikirim ke email'], 200);
        }

        return response()->json(['message' => 'Email tidak ditemukan'], 404);
    }
}
