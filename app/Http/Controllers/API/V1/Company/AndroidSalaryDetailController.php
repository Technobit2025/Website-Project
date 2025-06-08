<?php

namespace App\Http\Controllers\API\V1\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AndroidSalaryDetailService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AndroidSalaryDetailController extends Controller
{
    protected $service;

    public function __construct(AndroidSalaryDetailService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $user = Auth::user();
        Log::info('Authenticated user: ', ['user' => $user]);

        $employee = $user->employee;

        if (!$employee) {
            Log::warning('Relasi employee tidak ditemukan untuk user ID: ' . $user->id);
            return response()->json(['message' => 'Data karyawan tidak ditemukan.'], 404);
        }

        $employeeId = $employee->id;

        $periodIds = $request->input('period_ids');

        // Default: Ambil periode terakhir jika tidak dikirim dari request
        if (!$periodIds) {
            $periodIds = DB::table('payrolls')
                ->join('payroll_periods', 'payrolls.payroll_period_id', '=', 'payroll_periods.id')
                ->where('payrolls.employee_id', $employeeId)
                ->orderByDesc('payroll_periods.end_date')
                ->limit(1)
                ->pluck('payrolls.payroll_period_id')
                ->toArray();
        }

        $data = $this->service->getSalaryDetailByPeriods($employeeId, $periodIds);

        if (empty($data)) {
            return response()->json(['message' => 'Data gaji tidak ditemukan.'], 404);
        }

        return response()->json(['data' => $data]);
    }
}
