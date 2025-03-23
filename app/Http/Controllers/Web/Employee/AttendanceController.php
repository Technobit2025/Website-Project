<?php

namespace App\Http\Controllers\Web\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyAttendance;
use App\Models\CompanyPlace;
use App\Models\CompanySchedule;
use App\Models\CompanyShift;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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

        $employee = Employee::where('user_id', Auth::id())->first();
        if (!$employee || is_null($employee->company_id)) {
            return back()->with('error', $employee ? 'anda tidak terdaftar sebagai karyawan' : 'anda tidak login');
        }

        $companyPlace = CompanyPlace::where('code', $request->code)
            ->where('company_id', $employee->company_id)
            ->first();

        if (!$companyPlace) {
            return back()->with('error', 'kode lokasi tidak ditemukan atau anda bukan karyawan perusahaan ini');
        }

        // **Validasi Lokasi GPS vs IP**
        if (!$this->validateLocation($request->latitude, $request->longitude, $request->ip())) {
            return back()->with('error', 'terdeteksi fake GPS, lokasi anda mencurigakan');
        }

        $schedule = CompanySchedule::where('company_id', $employee->company_id)
            ->where('date', now()->toDateString())
            ->where('employee_id', $employee->id)
            ->first();

        if (!$schedule) {
            return back()->with('error', 'jadwal kerja tidak ditemukan');
        }

        $shift = CompanyShift::find($schedule->company_shift_id);

        if (!$shift || $shift->start_time > now() || $shift->end_time < now()) {
            return back()->with('error', 'jadwal kerja tidak aktif');
        }

        $distance = $this->haversineDistance($request->latitude, $request->longitude, $companyPlace->latitude, $companyPlace->longitude);

        if ($distance > env('APP_LOCATION_MAX_DISTANCE', 10) * 10) { // 100 m
            return back()->with('error', 'anda tidak berada di lokasi yang diizinkan');
        }

        $existingAttendance = CompanyAttendance::where('employee_id', $employee->id)
            ->whereDate('checked_in_at', now()->toDateString())
            ->exists();

        if ($existingAttendance) {
            return back()->with('error', 'anda sudah check-in hari ini');
        }

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

        $employee = Employee::where('user_id', Auth::id())->first();
        if (!$employee) {
            return back()->with('error', 'anda tidak login');
        }

        $companyPlace = CompanyPlace::where('company_id', $employee->company_id)
            ->where('code', $request->code)
            ->first();

        if (!$companyPlace) {
            return back()->with('error', 'kode lokasi tidak ditemukan atau anda bukan karyawan perusahaan ini');
        }

        // **Validasi Lokasi GPS vs IP**
        if (!$this->validateLocation($request->latitude, $request->longitude, $request->ip())) {
            return back()->with('error', 'terdeteksi fake GPS, lokasi anda mencurigakan');
        }

        $distance = $this->haversineDistance(
            $request->latitude,
            $request->longitude,
            $companyPlace->latitude,
            $companyPlace->longitude
        );

        if ($distance > env('APP_LOCATION_MAX_DISTANCE', 10) * 10) { // 100 m
            return back()->with('error', 'anda tidak berada di lokasi yang diizinkan');
        }

        $attendance = CompanyAttendance::where('employee_id', $employee->id)
            ->whereDate('checked_in_at', now()->toDateString())
            ->whereNull('checked_out_at')
            ->first();

        if (!$attendance) {
            return back()->with('error', 'anda belum check-in atau sudah check-out');
        }

        $attendance->update(['checked_out_at' => now()]);

        return back()->with('success', 'check-out berhasil');
    }

    // **Validasi Lokasi GPS vs IP**
    private function validateLocation($latUser, $lonUser, $ip)
    {
        try {
            $geoData = Http::get("https://ipinfo.io/{$ip}/json")->json();

            if (!isset($geoData['loc'])) {
                Log::error('Gagal ambil lokasi dari IP', ['response' => $geoData]);
                return false;
            }

            [$ipLat, $ipLon] = explode(',', $geoData['loc']);

            Log::info('User GPS:', ['lat' => $latUser, 'lon' => $lonUser]);
            Log::info('IP Geolocation:', ['lat' => $ipLat, 'lon' => $ipLon]);

            $ipDistance = $this->haversineDistance($latUser, $lonUser, $ipLat, $ipLon);

            Log::info('Jarak GPS & IP:', ['distance' => $ipDistance]);

            return $ipDistance <= env('APP_LOCATION_MAX_DISTANCE', 10) * 1000; // Maksimum selisih 10KM
        } catch (\Exception $e) {
            Log::error('Error fetch IP geolocation:', ['error' => $e->getMessage()]);
            return false;
        }
    }


    // **Hitung jarak antar koordinat (Haversine Formula)**
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
