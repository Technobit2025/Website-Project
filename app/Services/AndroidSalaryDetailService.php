<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class AndroidSalaryDetailService
{
    public function getSalaryDetailByPeriods($employeeId, array $periodIds): array
    {
        $results = [];

        foreach ($periodIds as $periodId) {
            $data = DB::select('CALL get_salary_detail(?, ?)', [$employeeId, $periodId]);

            if (!empty($data)) {
                $row = $data[0];
                $results[] = [
                    'periode' => $row->period_name,
                    'tanggal' => $row->start_date . ' s.d. ' . $row->end_date,
                    'status' => $row->status,
                    'detail' => [
                        'total_gaji' => (int) $row->total_gaji,
                        'gaji_pokok' => (int) $row->gaji_pokok,
                        'tunjangan' => (int) $row->tunjangan,
                        'bonus' => (int) $row->bonus,
                        'pajak' => (int) $row->pajak, // asumsi pajak dikurangkan
                        'insentif_pajak' => (int) $row->insentif_pajak,
                    ]
                ];
            }
        }

        return $results;
    }
}
