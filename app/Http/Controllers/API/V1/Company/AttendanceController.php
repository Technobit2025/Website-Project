<?php

namespace App\Http\Controllers\API\V1\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Presence;
use App\Models\Employee;

class AttendanceController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan pengguna yang terautentikasi
        $user = auth()->user();  

        // Ambil employee_id yang terkait dengan user yang terautentikasi
        $employee = Employee::where('user_id', $user->id)->first();

        if (!$employee) {
            return response()->json([
                'message' => 'Employee not found for the authenticated user.',
            ], 404);
        }

        $employee_id = $employee->id;

        // Ambil data presensi berdasarkan employee_id
        $history = Presence::with('schedule', 'employee')
            ->where('employee_id', $employee_id)
            ->latest()
            ->get()
            ->map(function ($item) {
                return [
                    'date' => $item->created_at->format('Y-m-d'),
                    'check_in' => $item->check_in_time,
                    'check_out' => $item->check_out_time,
                    'location' => $item->location,
                    'notes' => $item->notes,
                    'schedule' => [
                        'start' => optional($item->schedule)->start_time,
                        'end' => optional($item->schedule)->end_time,
                    ],
                ];
            });

        return response()->json([
            'status' => true,
            'message' => 'Success get presensi history',
            'data' => $history
        ]);
    }
}
