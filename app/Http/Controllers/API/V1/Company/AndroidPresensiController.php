<?php

namespace App\Http\Controllers\Api\V1\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AndroidPresensiController extends Controller
{
    public function store(Request $request)
    {
        $user = auth()->user();

        $data = $request->validate([
            'company_place_id' => 'required|integer',
            'photo_path' => 'required|string',
            'user_note' => 'nullable|string',
        ]);

        $employeeId = $user->employee->id ?? null;

        if (!$employeeId) {
            return response()->json([
                'success' => false,
                'message' => 'User belum terkait dengan data karyawan (employee_id tidak ditemukan)',
                'error' => 'employee_id_null',
            ], 422);
        }

        try {
            $result = DB::select("CALL sp_create_or_update_attendance(?, ?, ?, ?, ?)", [
                $employeeId,
                $data['company_place_id'],
                $data['photo_path'],
                $data['user_note'] ?? null,
                false // FALSE = bukan manual
            ]);

            // Ambil data presensi terbaru setelah stored procedure jalan
            $attendance = DB::table('company_attendances')
                ->where('employee_id', $employeeId)
                ->whereDate('created_at', Carbon::now()->toDateString())
                ->latest('id')
                ->first();

            return response()->json([
                'success' => true,
                'message' => 'Presensi berhasil diproses',
                'data' => [
                    'employee_id'     => $employeeId,
                    'company_place_id'=> $data['company_place_id'],
                    'status'          => $attendance->status ?? 'Unknown',
                    'clock_in'        => $attendance->checked_in_at ?? null,
                    'clock_out'       => $attendance->checked_out_at ?? null,
                    'photo_path'      => $attendance->photo_path ?? $data['photo_path'],
                    'user_note'       => $attendance->user_note ?? $data['user_note'] ?? null,
                ],
            ]);

        } catch (\Exception $e) {
            if (str_contains($e->getMessage(), 'SQLSTATE[45000]')) {
                preg_match('/SQLSTATE\[45000\]: <<Unknown error>>: 1644 (.*)/', $e->getMessage(), $matches);
                $errorMessage = $matches[1] ?? 'Terjadi kesalahan';

                return response()->json([
                    'success' => false,
                    'message' => 'Presensi gagal karena kamu sudah presensi sebelumnya',
                    'error' => $errorMessage,
                ], 422);
            }

            return response()->json([
                'success' => false,
                'message' => 'Gagal memproses presensi',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
