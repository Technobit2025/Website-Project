<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class AndroidScheduleService
{
    public function getFilteredSchedules(?int $companyId, ?int $employeeId, ?string $startDate, ?string $endDate): array
    {
        $results = DB::select('CALL sp_get_employee_schedules_filtered_with_logs(?, ?, ?, ?)', [
            $companyId,
            $employeeId,
            $startDate,
            $endDate
        ]);

        return array_map(fn($item) => (array) $item, $results);
    }
}
