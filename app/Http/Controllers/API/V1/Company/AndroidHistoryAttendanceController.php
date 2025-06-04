<?php

namespace App\Http\Controllers\API\V1\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AndroidHistoryAttendanceController extends Controller
{
    public function getHistoryByEmployee(Request $request)
    {
        // Get the authenticated user
        $user = Auth::user();

        // Get the employee relationship from the user
        $employee = $user->employee;

        // If no employee is associated with the user, return an error message
        if (!$employee) {
            return response()->json([
                'message' => 'Employee data not found for this user.'
            ], 404);
        }

        // Call the stored procedure to get the attendance history for the employee
        $results = DB::select('CALL get_company_attendance_history_by_employee(?)', [
            $employee->id
        ]);

        // Log the results for debugging
        // \Log::debug($results);

        // Map the results to a structured response
        $response = array_map(function ($item) {
            return [
                'nama' => $item->nama,
                'tanggal' => $item->tanggal,
                'status' => $item->status, // Corrected to access 'status' which is part of the enum in the table
                'lokasi' => $item->lokasi,
                'shift' => $item->shift,
                'foto' => $item->foto,
            ];
        }, $results);

        // Return the structured response
        return response()->json($response);
    }
}
