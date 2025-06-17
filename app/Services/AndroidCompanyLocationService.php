<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AndroidCompanyLocationService
{
    public function getLocationByUser(): ?array
    {
        $user = Auth::user();
        $employee = $user->employee; // relasi dari model User ke Employee

        if (!$employee) {
            return null;
        }

        $employeeId = $employee->id;

        $result = DB::selectOne("CALL GetCompanyLocationByEmployeeId(?)", [$employeeId]);

        if (!$result) {
            return null;
        }

        return [
            'latitude' => $result->latitude,
            'longitude' => $result->longitude,
        ];
    }
}
