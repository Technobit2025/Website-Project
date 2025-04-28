<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Carbon\Carbon;
use App\Models\CompanyPresence;
use App\Models\PresenceDetail;

class PresenceController extends Controller
{
    public function index()
    {
        $employee = auth()->user()->employee;
        $today = Carbon::today()->toDateString();

        // Cek sudah presensi kedatangan / kepulangan
        $sudahPresensiKedatangan = PresenceDetail::where('employee_id', $employee->id)
            ->where('date', $today)
            ->where('information', 'Presensi Kedatangan') // PENTING pakai kolom information
            ->exists();

        $sudahPresensiKepulangan = PresenceDetail::where('employee_id', $employee->id)
            ->where('date', $today)
            ->where('information', 'Presensi Kepulangan')
            ->exists();

        return view('global.presence.index', compact('employee', 'sudahPresensiKedatangan', 'sudahPresensiKepulangan'));
    }

    // 
//     public function store(Request $request, Employee $employee)
// {
//     $request->validate([
//         'kegiatan' => 'required',
//     ]);

//     $now = Carbon::now();
//     $hari = $now->format('l');
//     $waktuSekarang = $now->format('H:i:s');
//     $today = $now->toDateString();
//     $companyId = $employee->company_id;

//     $jadwal = CompanyPresence::where('company_id', $companyId)
//         ->where('information', $request->kegiatan)
//         ->where('day', $hari)
//         ->first();

//     if (!$jadwal) {
//         return back()->with('error', 'Jadwal presensi tidak ditemukan.');
//     }

//     $endTime = Carbon::createFromFormat('H:i:s', $jadwal->start_end);
//     $currentTime = Carbon::createFromFormat('H:i:s', $waktuSekarang);

//     $status = 'hadir';
//     if ($request->kegiatan === 'Presensi Kedatangan' && $currentTime->gt($endTime)) {
//         $status = 'terlambat';
//     }

//     // 🛡️ Cek apakah sudah presensi
//     $sudahPresensi = PresenceDetail::where('employee_id', $employee->id)
//         ->where('date', $today)
//         ->where('information', $request->kegiatan)
//         ->exists();

//     if ($sudahPresensi) {
//         return back()->with('error', 'Kamu sudah melakukan ' . strtolower($request->kegiatan) . ' hari ini.');
//     }

//     // 🚀 Simpan presensi baru
//     PresenceDetail::create([
//         'employee_id' => $employee->id,
//         'information' => $request->kegiatan, // jangan lupa sekarang disimpan ke kolom 'information'
//         'date' => $today,
//         'status' => strtolower($status),
//     ]);

//     return redirect()->route('presence.index')->with('success', 'Presensi berhasil disimpan.');
// }
public function store(Request $request, Employee $employee)
{
    $request->validate([
        'kegiatan' => 'required',
    ]);

    $now = Carbon::now();
    $hari = $now->format('l');
    $waktuSekarang = $now->format('H:i:s');
    $today = $now->toDateString();
    $companyId = $employee->company_id;

    $jadwal = CompanyPresence::where('company_id', $companyId)
        ->where('information', $request->kegiatan)
        ->where('day', $hari)
        ->first();
    // dd($jadwal); 
    if (!$jadwal) {
        return back()->with('error', 'Jadwal presensi tidak ditemukan.');
    }

    $endTime = Carbon::createFromFormat('H:i:s', $jadwal->start_end);
    $currentTime = Carbon::createFromFormat('H:i:s', $waktuSekarang);
    dd($endTime);

    // Default status
    $status = 'hadir';

    // Cek status untuk Presensi Kedatangan
    if ($request->kegiatan === 'Presensi Kedatangan' && $currentTime->gt($endTime)) {
        $status = 'terlambat';
    }

    // Cek status untuk Presensi Kepulangan
    if ($request->kegiatan === 'Presensi Kepulangan' && $currentTime->lt($endTime)) {
        // Misalnya: pulang sebelum waktu seharusnya, berarti juga terlambat (atau bisa diubah logikanya kalau mau)
        $status = 'terlambat';
    }

    // 🛡️ Cek apakah sudah presensi
    $sudahPresensi = PresenceDetail::where('employee_id', $employee->id)
        ->where('date', $today)
        ->where('information', $request->kegiatan)
        ->exists();

    if ($sudahPresensi) {
        return back()->with('error', 'Kamu sudah melakukan ' . strtolower($request->kegiatan) . ' hari ini.');
    }

    // 🚀 Simpan presensi baru
    PresenceDetail::create([
        'employee_id' => $employee->id,
        'information' => $request->kegiatan, // Simpan informasi
        'date' => $today,
        'status' => strtolower($status),
    ]);

    return redirect()->route('presence.index')->with('success', 'Presensi berhasil disimpan.');
}


}
