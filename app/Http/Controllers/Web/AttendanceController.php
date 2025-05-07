<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\CompanyAttendance;
use App\Models\CompanyPlace;
use App\Models\CompanySchedule;
use App\Models\CompanyShift;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AttendanceController extends Controller
{
    // public function index()
    // {
    //     $user = Auth::user();
    //     if (!$user) {
    //         return view('global.attendance.index', ['isEmployee' => false])
    //             ->with('warning', 'Anda belum login');
    //     }

    //     $employee = Employee::where('user_id', $user->id)->first();

    //     if (!$employee) {
    //         return view('global.attendance.index', ['isEmployee' => false])
    //             ->with('warning', 'Anda bukan karyawan');
    //     }

    //     $today = now()->toDateString();

    //     $isHaveSchedule = CompanySchedule::where('employee_id', $employee->id)
    //         ->where('date', $today)
    //         ->exists();

    //     $attendance = CompanyAttendance::where('employee_id', $employee->id)
    //         ->whereDate('checked_in_at', $today)
    //         ->orderBy('checked_in_at', 'desc')
    //         ->first();

    //     $isCheckedIn = $attendance ? true : false;
    //     $isCheckedOut = $attendance && $attendance->checked_out_at !== null;

    //     return view('global.attendance.index', [
    //         'isEmployee' => true,
    //         'isCheckedIn' => $isCheckedIn,
    //         'isCheckedOut' => $isCheckedOut,
    //         'isHaveSchedule' => $isHaveSchedule,
    //     ]);
    // }
    public function index()
    {
        $user = Auth::user();
        $isEmployee = false;
        $isCheckedIn = false;
        $isCheckedOut = false;
        $isHaveSchedule = false;

        if (!$user) {
            return view('global.attendance.index', compact(
                'isEmployee',
                'isCheckedIn',
                'isCheckedOut',
                'isHaveSchedule'
            ))->with('warning', 'Anda belum login');
        }

        $employee = Employee::where('user_id', $user->id)->first();

        if (!$employee) {
            return view('global.attendance.index', compact(
                'isEmployee',
                'isCheckedIn',
                'isCheckedOut',
                'isHaveSchedule'
            ))->with('warning', 'Anda bukan karyawan');
        }

        // kalau udah sampai sini, berarti dia karyawan
        $isEmployee = true;

        $today = now()->toDateString();

        $isHaveSchedule = CompanySchedule::where('employee_id', $employee->id)
            ->where('date', $today)
            ->exists();

        $attendance = CompanyAttendance::where('employee_id', $employee->id)
            ->whereDate('checked_in_at', $today)
            ->orderBy('checked_in_at', 'desc')
            ->first();

        $isCheckedIn = !is_null($attendance);
        $isCheckedOut = !is_null($attendance?->checked_out_at);

        return view('global.attendance.index', compact(
            'isEmployee',
            'isCheckedIn',
            'isCheckedOut',
            'isHaveSchedule'
        ));
    }

    public function checkIn(Company $company)
    {
        $now = now();
        $employee = Employee::where('user_id', Auth::id())->first();

        if (!$employee) {
            return back()->with('error', 'anda tidak login');
        }

        if (is_null($employee->company_id)) {
            return back()->with('error', 'anda tidak terdaftar sebagai karyawan');
        }

        // ambil jadwal hari ini (bukan hanya hari 'Senin', tapi sesuai tanggal)
        $schedule = CompanySchedule::where('company_id', $employee->company_id)
            ->where('employee_id', $employee->id)
            ->where('date', $now->toDateString())
            ->first();

        if (!$schedule) {
            return back()->with('error', 'jadwal kerja tidak ditemukan pada ' . $now);
        }

        $shift = CompanyShift::find($schedule->company_shift_id);
        if (!$shift) {
            return back()->with('error', 'shift kerja tidak ditemukan');
        }

        if (CompanyAttendance::where('employee_id', $employee->id)->whereDate('checked_in_at', $now->toDateString())->exists()) {
            return back()->with('error', 'anda sudah check-in hari ini');
        }
        // Waktu shift asli
        $start = Carbon::createFromFormat('Y-m-d H:i:s', $now->toDateString() . ' ' . $shift->start_time);
        $end   = Carbon::createFromFormat('Y-m-d H:i:s', $now->toDateString() . ' ' . $shift->end_time);
        $late  = Carbon::createFromFormat('Y-m-d H:i:s', $now->toDateString() . ' ' . $shift->late_time);

        // jika shift lintas hari (end lebih kecil dari start), tambahkan 1 hari ke end dan late
        if ($shift->end_time < $shift->start_time) {
            $end->addDay();
        }
        if ($shift->late_time < $shift->start_time) {
            $late->addDay();
        }

        // validasi belum boleh masuk
        if ($now->lt($start)) {
            return back()->with('error', 'belum masuk jadwal shift');
        }

        // validasi udah lewat dari akhir shift
        if ($now->gt($end)) {
            return back()->with('error', 'jadwal shift sudah berakhir');
        }

        // status hadir atau telat
        $telat = $now->gt($late);

        CompanyAttendance::create([
            'employee_id' => $employee->id,
            'status' => $telat ? 'Late' : 'Present',
            'checked_in_at' => $now,
        ]);

        if ($telat) {
            $lateMinutes = $late->diffInMinutes($now, false);
            $lateMinutes = abs($lateMinutes);
            $hours = intdiv($lateMinutes, 60);
            $minutes = $lateMinutes % 60;
            $lateString = '';
            if ($hours > 0) $lateString .= "{$hours} jam ";
            if ($minutes > 0) $lateString .= "{$minutes} menit";
            $lateString = trim($lateString) ?: '0 menit';

            return back()->with('warning', "anda telat {$lateString}");
        } else {
            return back()->with('success', 'check-in berhasil');
        }
    }

    public function checkOut()
    {
        $employee = Employee::where('user_id', Auth::id())->first();
        if (!$employee) {
            return back()->with('error', 'anda tidak login');
        }

        $now = now();
        $today = $now->toDateString();

        // ambil schedule harian dari tabel schedule (bukan dari shift langsung)
        $schedule = CompanySchedule::where('employee_id', $employee->id)
            ->where('date', $today)
            ->first();

        if (!$schedule) {
            return back()->with('error', 'jadwal kerja tidak ditemukan');
        }

        $shift = CompanyShift::find($schedule->company_shift_id);
        if (!$shift) {
            return back()->with('error', 'shift tidak ditemukan');
        }

        // konversi waktu shift ke objek Carbon
        $start = Carbon::createFromFormat('Y-m-d H:i:s', $today . ' ' . $shift->start_time);
        $end   = Carbon::createFromFormat('Y-m-d H:i:s', $today . ' ' . $shift->end_time);
        $checkoutAllowed = Carbon::createFromFormat('Y-m-d H:i:s', $today . ' ' . $shift->checkout_time);

        // kalau end_time lebih kecil dari start_time => berarti shift lintas hari
        if ($shift->end_time < $shift->start_time) {
            $end->addDay();
        }

        if ($shift->checkout_time < $shift->start_time) {
            $checkoutAllowed->addDay();
        }

        // validasi: belum masuk shift
        if ($now->lt($start)) {
            return back()->with('error', 'belum masuk jadwal shift');
        }

        $attendance = CompanyAttendance::where('employee_id', $employee->id)
            ->whereDate('checked_in_at', $start->toDateString()) // cocokkan dengan tanggal start shift
            ->whereNull('checked_out_at')
            ->first();

        if ($attendance->checked_out_at) {
            return back()->with('error', 'anda sudah check-out');
        }

        if (!$attendance) {
            return back()->with('error', 'anda belum check-in');
        }

        // default status = Present
        $status = $attendance->status;

        if ($now->lt($checkoutAllowed)) {
            $status = 'Leave Early';
        }

        // update data
        $attendance->update([
            'checked_out_at' => $now,
            'status' => $status,
        ]);

        return back()->with($status === 'Leave Early' ? 'warning' : 'success', $status === 'Leave Early' ? 'Anda pulang lebih awal' : 'check-out berhasil');
    }

    // private function validateLocation($latUser, $lonUser, $ip)
    // {
    //     try {
    //         $geoData = Http::get("https://ipinfo.io/{$ip}/json")->json();

    //         if (!isset($geoData['loc'])) {
    //             Log::error('Gagal ambil lokasi dari IP', ['response' => $geoData]);
    //             return false;
    //         }

    //         [$ipLat, $ipLon] = explode(',', $geoData['loc']);

    //         Log::info('User GPS:', ['lat' => $latUser, 'lon' => $lonUser]);
    //         Log::info('IP Geolocation:', ['lat' => $ipLat, 'lon' => $ipLon]);

    //         $ipDistance = $this->haversineDistance($latUser, $lonUser, $ipLat, $ipLon);

    //         Log::info('Jarak GPS & IP:', ['distance' => $ipDistance]);

    //         return $ipDistance <= env('APP_LOCATION_MAX_DISTANCE', 10) * 1000; // Maksimum selisih 10KM
    //     } catch (\Exception $e) {
    //         Log::error('Error fetch IP geolocation:', ['error' => $e->getMessage()]);
    //         return false;
    //     }
    // }
    // private function haversineDistance($lat1, $lon1, $lat2, $lon2)
    // {
    //     $earthRadius = 6371000; // meter

    //     $dLat = deg2rad($lat2 - $lat1);
    //     $dLon = deg2rad($lon2 - $lon1);
    //     $lat1 = deg2rad($lat1);
    //     $lat2 = deg2rad($lat2);

    //     $a = sin($dLat / 2) * sin($dLat / 2) +
    //         cos($lat1) * cos($lat2) *
    //         sin($dLon / 2) * sin($dLon / 2);

    //     $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    //     return $earthRadius * $c;
    // }
}
