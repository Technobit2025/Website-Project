<?php
namespace App\Http\Controllers\API\V1\Company;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AndroidJadwalPatroliController extends Controller
{
    public function getJadwalPatroli()
    {
        // 1) Ambil semua baris patrol
        $rows = DB::table('employee_shift_schedules as ess')
            ->join('employees as e', 'ess.employee_id', '=', 'e.id')
            ->join('company_shifts as cs', 'ess.company_shift_id', '=', 'cs.id')
            ->select([
                'ess.duty_date as tanggal',
                'cs.name as waktu',
                'cs.start_time',
                'cs.end_time',
                'ess.location',
                'e.fullname',
            ])
            ->orderBy('ess.duty_date', 'asc')
            ->get();

        Log::info('Raw Patrol Rows:', ['data' => $rows]);

        // 2) Group by tanggal + nama shift
        $jadwal = $rows
            ->groupBy(fn($item) => $item->tanggal . '|' . $item->waktu)
            ->map(fn($group) => [
                'tanggal'      => $group->first()->tanggal,
                'waktu'        => $group->first()->waktu,
                'jam_mulai'    => date('H:i', strtotime($group->first()->start_time)) . ' WIB',
                'jam_selesai'  => date('H:i', strtotime($group->first()->end_time)) . ' WIB',
                'lokasi'       => $group->first()->location,
                'rekan_tugas'  => $group->pluck('fullname')->unique()->values()->all(),
            ])
            ->values();

        Log::info('Formatted Patrol Schedule:', ['data' => $jadwal]);

        if ($jadwal->isEmpty()) {
            return response()->json(['message' => 'No patrol schedule found'], 404);
        }

        return response()->json($jadwal);
    }
}
