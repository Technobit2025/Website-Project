<?php
namespace App\Http\Controllers\API\V1\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AndroidJadwalEmployeeService;
use App\Models\Employee;

class AndroidJadwalEmployeeController extends Controller
{
    protected $jadwalService;

    public function __construct(AndroidJadwalEmployeeService $jadwalService)
    {
        $this->jadwalService = $jadwalService;
    }

    public function getJadwal(Request $request)
    {
        $user = $request->user();

        $employee = Employee::where('user_id', $user->id)->first();

        if (!$employee) {
            return response()->json(['message' => 'Employee tidak ditemukan untuk user ini.'], 404);
        }

        $data = $this->jadwalService->getTodayScheduleWithPeers($employee->id);

        if (!$data) {
            return response()->json(['message' => 'Jadwal tidak ditemukan.'], 404);
        }

        return response()->json($data);
    }
}