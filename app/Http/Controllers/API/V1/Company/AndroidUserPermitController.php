<?php

namespace App\Http\Controllers\API\V1\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AndroidUserPermitService;

class AndroidUserPermitController extends Controller
{
    protected $permitService;

    public function __construct(AndroidUserPermitService $permitService)
    {
        $this->permitService = $permitService;
    }

    public function index(Request $request)
    {
        // Ambil user yang sedang login
        $user = auth()->user();

        // Cek apakah user ada dan memiliki relasi employee yang valid
        if (!$user || !$user->employee) {
            return response()->json([
                'status' => false,
                'message' => 'User is not authenticated or employee data not found',
            ], 401);
        }

        // Ambil employee_id dari relasi employee
        $employeeId = $user->employee->id;

        // Panggil service untuk mengambil data permits berdasarkan employee_id
        $permits = $this->permitService->getPermitsByEmployeeId($employeeId);

        // Jika tidak ada data permits
        if (empty($permits)) {
            return response()->json([
                'status' => false,
                'message' => 'No permits found for this employee.',
            ], 404);
        }

        // Kembalikan data permits yang ditemukan
        return response()->json([
            'status' => true,
            'data' => $permits
        ]);
    }
}
