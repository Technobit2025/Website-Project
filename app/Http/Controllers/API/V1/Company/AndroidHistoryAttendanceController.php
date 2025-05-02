<?php

namespace App\Http\Controllers\API\V1\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AndroidHistoryAttendanceController extends Controller
{
    public function index(Request $request)
    {
        // Ambil employee_id dari user yang login
        $employeeId = auth()->user()->load('employee')->employee->id;

        // Jalankan stored procedure
        $histories = DB::select('CALL sp_get_attendance_history_by_employee(?)', [$employeeId]);

        return response()->json([
            'message' => 'Riwayat presensi berhasil diambil',
            'data' => $histories,
        ], 200);
    }
}
