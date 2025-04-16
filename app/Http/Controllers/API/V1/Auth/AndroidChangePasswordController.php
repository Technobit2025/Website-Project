<?php

namespace App\Http\Controllers\API\V1\Auth;

use App\Http\Requests\ChangePasswordRequest;
use App\Services\ChangePasswordService;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;


class AndroidChangePasswordController extends Controller
{
    protected $changePasswordService;

    public function __construct(ChangePasswordService $changePasswordService)
    {
        $this->middleware('auth:sanctum'); // Pastikan user terautentikasi
        $this->changePasswordService = $changePasswordService;
    }

    public function changePassword(ChangePasswordRequest $request): JsonResponse
    {
        $success = $this->changePasswordService->changePassword(
            $request->current_password,
            $request->new_password
        );

        if (!$success) {
            return response()->json([
                'status' => 'error',
                'message' => 'Password lama salah atau tidak valid.',
                'errors' => [
                    'current_password' => ['Password yang kamu masukkan tidak cocok dengan data kami.']
                ]
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        return response()->json([
            'status'=>'success',
            'message' => 'Password berhasil diubah. Silahkan login kembali'], Response::HTTP_OK);
    }
}
