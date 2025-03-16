<?php

namespace App\Http\Controllers\API\V1\Auth;

use App\Http\Controllers\API\APIController;
use Illuminate\Http\Request;
use App\Services\AndroidOtpService;

class AndroidVerifyOtpController extends APIController
{
    protected $otpService;

    public function __construct(AndroidOtpService $otpService)
    {
        $this->otpService = $otpService;
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|digits:4'
        ]);

        if ($this->otpService->verifyOtp($request->email, $request->otp)) {
            return response()->json(['message' => 'OTP valid, lanjut ke reset password'], 200);
        }

        return response()->json(['message' => 'OTP tidak valid atau kadaluarsa'], 400);
    }
}
