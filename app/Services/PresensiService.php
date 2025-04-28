<?php
namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Models\CompanyAttendance;
use Illuminate\Support\Facades\Storage;
use App\DTO\PresensiData;
use Carbon\Carbon;
use App\Models\CompanyShift;

class PresensiService
{
    /**
     * Jika belum pernah check-in hari ini → buat record baru (clock-in).
     * Jika sudah check-in tapi belum check-out → update record (clock-out).
     */
    public function handle(PresensiData $data, $isAndroid = false): CompanyAttendance
    {
        $employeeId = Auth::user()->employee->id;
        $today = Carbon::today()->toDateString();

        // Cari presensi hari ini yang belum check-out
        $attendance = CompanyAttendance::where('employee_id', $employeeId)
            ->whereDate('checked_in_at', $today)
            ->whereNull('checked_out_at')
            ->first();

        if ($attendance) {
            // → Clock-out
            $now = Carbon::now();
            $shift = CompanyShift::where('company_id', Auth::user()->employee->company_id)
                ->where(function ($query) use ($now) {
                    $query->whereTime('start_time', '<=', $now->toTimeString())
                          ->whereTime('end_time', '>=', $now->toTimeString());
                })
                ->first();

            if ($shift) {
                if ($now->lt(Carbon::parse($shift->end_time))) {
                    $status = 'Left Early';
                } else {
                    $status = 'Present';
                }
            } else {
                $status = 'Present';
            }

            $attendance->update([
                'checked_out_at' => $now,
                'status'         => $status,
            ]);

            return $attendance;
        }

        // → Clock-in
        // Validasi wajib: photo_data & filename hanya untuk Android
        if ($isAndroid) {
            if (empty($data->photo_data) || empty($data->filename)) {
                throw new \InvalidArgumentException("Photo data dan filename wajib diisi");
            }

            // Validasi status clock-in (misal hanya boleh “Present” atau “WFH” dsb)
            $validIn = ['Present', 'WFH', 'Sick Leave', 'Leave', 'Late'];
            if (!in_array($data->status, $validIn)) {
                throw new \InvalidArgumentException("Status check-in tidak valid");
            }

            // Simpan foto
            $imagePath = 'presensi/' . $data->filename;
            Storage::disk('public')->put($imagePath, base64_decode($data->photo_data));
        }

        // Buat record baru
        return CompanyAttendance::create([
            'employee_id'      => $employeeId,
            'company_place_id' => $data->company_place_id ?? 1,
            'latitude'         => $data->latitude ?? 0.0,
            'longitude'        => $data->longitude ?? 0.0,
            'checked_in_at'    => Carbon::now(),
            'status'           => $data->status,
            'note'             => $data->note ?? null,
            'photo_path'       => $isAndroid ? $imagePath : null,
        ]);
    }
}
