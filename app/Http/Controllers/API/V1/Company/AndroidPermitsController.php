<?php

namespace App\Http\Controllers\API\V1\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AndroidPermitsService;

class AndroidPermitsController extends Controller
{
    protected $permitService;

    public function __construct(AndroidPermitsService $permitService)
    {
        $this->permitService = $permitService;
    }

    public function index()
    {
        $user = auth()->user();
        $result = $this->permitService->getPermitsByUser($user->id);

        return response()->json($result);
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $result = $this->permitService->createPermit($request->all(), $user->id);

        return response()->json([
            'success' => true,
            'data' => $result
        ]);
    }

    public function destroy(Request $request)
    {
        $user = auth()->user();
        $permit_id = $request->id;

        $result = $this->permitService->deletePermit($permit_id, $user->id);

        return response()->json($result);
    }

    public function getPermitsByEmployee(Request $request)
    {
        $user = auth()->user();
        $employeeId = $user->employee->id;  // Mengambil employee_id dari relasi user-employee

        $result = $this->permitService->getPermitsByEmployee($employeeId);

        return response()->json([
            'success' => true,
            'data' => $result
        ]);
    }

    public function getSchedulesByEmployee(Request $request)
    {
        $user = auth()->user();
        $employeeId = $user->employee->id;  // Mengambil employee_id dari relasi user-employee

        $result = $this->permitService->getSchedulesByEmployee($employeeId);

        return response()->json([
            'success' => true,
            'data' => $result
        ]);
    }

    public function updateConfirmationStatus(Request $request)
    {
        $user = auth()->user();

        // Mengambil data dari request
        $data = $request->all();

        // Mengirim data ke service
        $result = $this->permitService->updateConfirmationStatus($data, $user->id);

        return response()->json($result);
    }


    public function getPermitsByAlternate(Request $request)
    {
        $user = auth()->user();
        $alternateId = $user->employee->id; // Mengambil ID pegawai dari user yang login

        $result = $this->permitService->getPermitsByAlternate($alternateId);

        return response()->json([
            'success' => true,
            'data' => $result
        ]);
    }
    public function getApprovedPermitsForAlternate(Request $request)
    {
        $user = auth()->user();
        $employeeId = $user->employee->id;

        $result = $this->permitService->getApprovedPermitsForAlternate($employeeId);

        return response()->json([
            'success' => true,
            'data' => $result
        ]);
    }
}
