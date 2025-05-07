<?php

namespace App\Http\Controllers\API\V1\Company;

use App\Http\Controllers\Controller;
use App\Services\AndroidPermitsService;
use Illuminate\Http\Request;

class AndroidPermitsController extends Controller
{
    protected $permitService;

    public function __construct(AndroidPermitsService $permitService)
    {
        $this->permitService = $permitService;
    }

    // Menyimpan permit
    public function store(Request $request)
    {
        $user = $request->user(); // user dari sanctum token
        $data = $this->permitService->createPermit($request, $user);

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    // Menghapus permit
    public function destroy($id, Request $request)
    {
        $user = $request->user();
        $result = $this->permitService->deletePermit($id, $user->id);

        if (!$result['success']) {
            return response()->json([
                'success' => false,
                'message' => $result['message']
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => $result['message']
        ]);
    }

    // Menampilkan semua permit milik user
    public function index(Request $request)
    {
        $user = $request->user();
        $permits = $this->permitService->getUserPermits($user->id);

        return response()->json([
            'success' => true,
            'data' => $permits
        ]);
    }
}
