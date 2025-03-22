<?php

namespace App\Http\Controllers\API\V1\Company;

use App\Http\Controllers\API\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CompanyAttendance;
use App\Models\CompanyPlace;
use App\Models\Employee;

class CompanyAttendanceController extends APIController
{
    public function checkIn(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $employee = Employee::where('user_id', Auth::user()->id)->first();
        // if (!$employee) {
        //     return $this->clientErrorResponse('anda tidak login');
        // }
        if ($employee->company_id == null) {
            return $this->clientErrorResponse('anda tidak terdaftar sebagai karyawan');
        }

        $companyPlace = CompanyPlace::where('code', $request->code)->first();

        if (!$companyPlace) {
            return $this->clientErrorResponse('kode lokasi tidak ditemukan');
        }

        if ($companyPlace->company_id != $employee->company_id) {
            return $this->clientErrorResponse('anda bukan karyawan perusahaan ini');
        }

        // hitung jarak lokasi dengan Haversine Formula
        $distance = $this->haversineDistance(
            $request->latitude,
            $request->longitude,
            $companyPlace->latitude,
            $companyPlace->longitude
        );

        if ($distance > 10) { // lebih dari 10 meter
            return $this->clientErrorResponse('anda tidak berada di lokasi yang diizinkan');
        }

        // cek apakah sudah check-in hari ini
        $existingAttendance = CompanyAttendance::where('employee_id', $employee->id)
            ->whereDate('checked_in_at', now()->toDateString())
            ->first();

        if ($existingAttendance) {
            return $this->clientErrorResponse('anda sudah check-in hari ini');
        }

        // simpan presensi
        CompanyAttendance::create([
            'employee_id' => $employee->id,
            'company_place_id' => $companyPlace->id,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'checked_in_at' => now(),
        ]);

        return $this->successResponse('check-in berhasil');
    }

    public function checkOut(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $employee = Auth::user();
        $companyPlace = CompanyPlace::where('company_id', $employee->company_id)
            ->where('code', $request->code)
            ->first();

        if (!$companyPlace) {
            return $this->clientErrorResponse('anda tidak berada di lokasi yang diizinkan');
        }

        // cek apakah sudah check-in & belum check-out
        $attendance = CompanyAttendance::where('employee_id', $employee->id)
            ->whereNotNull('checked_in_at')
            ->whereNull('checked_out_at')
            ->first();

        if (!$attendance) {
            return $this->clientErrorResponse('anda belum check-in atau sudah check-out');
        }

        $attendance->update(['checked_out_at' => now()]);

        return $this->successResponse('check-out berhasil');
    }

    private function haversineDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371000; // meter

        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);
        $lat1 = deg2rad($lat1);
        $lat2 = deg2rad($lat2);

        $a = sin($dLat / 2) * sin($dLat / 2) +
            cos($lat1) * cos($lat2) *
            sin($dLon / 2) * sin($dLon / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        return $earthRadius * $c;
    }
}
