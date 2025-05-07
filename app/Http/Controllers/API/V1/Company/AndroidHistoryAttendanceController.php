<?php

namespace App\Http\Controllers\Api\V1\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AndroidHistoryAttendanceController extends Controller
{
    public function getHistoryByEmployee(Request $request)
    {
        $user = Auth::user();

        // Ambil relasi employee dari user
        $employee = $user->employee;

        if (!$employee) {
            return response()->json([
                'message' => 'Employee data not found for this user.'
            ], 404);
        }

        $results = DB::select('CALL get_company_attendance_history_by_employee(?)', [
            $employee->id
        ]);

        $response = array_map(function ($item) {
            return [
                'nama' => $item->nama,
                'tanggal' => $item->tanggal,
                'status' => $item->status,
                'lokasi' => $item->lokasi,
                'shift' => $item->shift,
                'foto' => $item->foto,
            ];
        }, $results);

        return response()->json($response);
    }
}
