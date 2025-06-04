<?php
namespace App\Http\Controllers\API\V1\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CompanyAttendance;
use App\Models\CompanyPlace;
use App\Models\Employee;
use App\Services\AndroidPresensiService;
use App\DTO\PresensiData;

class CompanyAttendanceController extends Controller
{
    protected $presensiService;

    public function __construct(AndroidPresensiService $presensiService)
    {
        $this->presensiService = $presensiService;
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
            return response()->json(['message' => 'anda tidak login'], 401);
        }
        if ($employee->company_id == null) {
            return response()->json(['message' => 'anda tidak terdaftar sebagai karyawan'], 400);
        }

        $companyPlace = CompanyPlace::where('code', $request->code)->first();

        if (!$companyPlace) {
            return response()->json(['message' => 'kode lokasi tidak ditemukan'], 404);
        }

        if ($companyPlace->company_id != $employee->company_id) {
            return response()->json(['message' => 'anda bukan karyawan perusahaan ini'], 403);
        }

        // hitung jarak lokasi dengan Haversine Formula
        $distance = $this->haversineDistance(
            $request->latitude,
            $request->longitude,
            $companyPlace->latitude,
            $companyPlace->longitude
        );

        if ($distance > 10) { // lebih dari 10 meter
            return response()->json(['message' => 'anda tidak berada di lokasi yang diizinkan'], 400);
        }

        // cek apakah sudah check-in hari ini
        $existingAttendance = CompanyAttendance::where('employee_id', $employee->id)
            ->whereDate('checked_in_at', now()->toDateString())
            ->first();

        if ($existingAttendance) {
            return response()->json(['message' => 'anda sudah check-in hari ini'], 400);
        }

        // simpan presensi
        $data = [
            'status' => 'Present',
            'company_place_id' => $companyPlace->id,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ];

        $presensi = $this->presensiService->handle(new PresensiData($data), false);

        return response()->json(['message' => 'check-in berhasil', 'data' => $presensi], 200);
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
            return response()->json(['message' => 'anda tidak login'], 401);
        }

        $companyPlace = CompanyPlace::where('company_id', $employee->company_id)
            ->where('code', $request->code)
            ->first();

        if (!$companyPlace) {
            return response()->json(['message' => 'anda tidak berada di lokasi yang diizinkan'], 404);
        }

        // cek apakah sudah check-in & belum check-out
        $attendance = CompanyAttendance::where('employee_id', $employee->id)
            ->whereNotNull('checked_in_at')
            ->whereNull('checked_out_at')
            ->first();

        if (!$attendance) {
            return response()->json(['message' => 'anda belum check-in atau sudah check-out'], 400);
        }

        // hitung jarak lokasi dengan Haversine Formula
        $distance = $this->haversineDistance(
            $request->latitude,
            $request->longitude,
            $companyPlace->latitude,
            $companyPlace->longitude
        );

        if ($distance > 10) { // lebih dari 10 meter
            return response()->json(['message' => 'anda tidak berada di lokasi yang diizinkan'], 400);
        }

        // clock-out menggunakan PresensiService
        $data = [
            'status' => 'Present', // status default, akan diubah oleh PresensiService
        ];

        $presensi = $this->presensiService->handle(new PresensiData($data), false);

        return response()->json(['message' => 'check-out berhasil', 'data' => $presensi], 200);
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
