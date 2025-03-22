<?php

namespace App\Http\Controllers\Web\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyAttendance;
use App\Models\CompanyPlace;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('employee.attendance.index');
    }

    public function checkIn(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $employee = Employee::where('user_id', Auth::user()->id)->first();
        if (!$employee) {
            return back()->with('error', 'anda tidak login');
        }
        if ($employee->company_id == null) {
            return back()->with('error', 'anda tidak terdaftar sebagai karyawan');
        }

        $companyPlace = CompanyPlace::where('code', $request->code)->first();

        if (!$companyPlace) {
            return back()->with('error', 'kode lokasi tidak ditemukan');
        }

        if ($companyPlace->company_id != $employee->company_id) {
            return back()->with('error', 'anda bukan karyawan perusahaan ini');
        }

        // hitung jarak lokasi dengan Haversine Formula
        $distance = $this->haversineDistance(
            $request->latitude,
            $request->longitude,
            $companyPlace->latitude,
            $companyPlace->longitude
        );

        if ($distance > 10000) { // lebih dari 10 meter
            return back()->with('error', 'anda tidak berada di lokasi yang diizinkan');
        }

        // cek apakah sudah check-in hari ini
        $existingAttendance = CompanyAttendance::where('employee_id', $employee->id)
            ->whereDate('checked_in_at', now()->toDateString())
            ->first();

        if ($existingAttendance) {
            return back()->with('error', 'anda sudah check-in hari ini');
        }

        // simpan presensi
        CompanyAttendance::create([
            'employee_id' => $employee->id,
            'company_place_id' => $companyPlace->id,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'checked_in_at' => now(),
        ]);

        return back()->with('success', 'check-in berhasil');
    }

    public function checkOut(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $employee = Employee::where('user_id', Auth::user()->id)->first();
        if (!$employee) {
            return back()->with('error', 'anda tidak login');
        }

        $companyPlace = CompanyPlace::where('company_id', $employee->company_id)
            ->where('code', $request->code)
            ->first();

        if (!$companyPlace) {
            return back()->with('error', 'anda tidak berada di lokasi yang diizinkan');
        }

        // cek apakah sudah check-in & belum check-out
        $attendance = CompanyAttendance::where('employee_id', $employee->id)
            ->whereNotNull('checked_in_at')
            ->whereNull('checked_out_at')
            ->first();

        if (!$attendance) {
            return back()->with('error', 'anda belum check-in atau sudah check-out');
        }

        $attendance->update(['checked_out_at' => now()]);

        return back()->with('success', 'check-out berhasil');
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
