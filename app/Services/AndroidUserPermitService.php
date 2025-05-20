<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class AndroidUserPermitService
{
    public function getPermitsByEmployeeId($employeeId)
    {
        return DB::select('CALL get_user_permits_by_employee_id(?)', [$employeeId]);
    }
}
