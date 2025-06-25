<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class AndroidJadwalEmployeeService
{
    public function getTodayScheduleWithPeers($employeeId)
    {
        $results = DB::select("CALL get_employee_today_schedule_with_peers(?)", [$employeeId]);

        if (empty($results)) {
            return null;
        }

        $jadwal = $results[0];
        $rekanList = array_unique(array_map(fn($row) => $row->rekan_tugas, $results));

        return [
            'tanggal' => $jadwal->tanggal,
            'waktu' => $jadwal->waktu,
            'jam_mulai' => $jadwal->jam_mulai,
            'jam_selesai' => $jadwal->jam_selesai,
            'lokasi' => $jadwal->lokasi,
            'rekan_tugas' => implode(', ', $rekanList)
        ];
    }
}