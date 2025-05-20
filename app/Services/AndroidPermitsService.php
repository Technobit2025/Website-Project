<?php

namespace App\Services;

use App\Models\Permit;
use App\Models\Employee;

class AndroidPermitsService
{
    public function getPermitsByUser($user_id)
    {
        $employee = Employee::where('user_id', $user_id)->first();

        if (!$employee) {
            return [
                'status' => false,
                'message' => 'Employee not found for this user.'
            ];
        }

        $permits = Permit::where('employee_id', $employee->id)->get();

        if ($permits->isEmpty()) {
            return [
                'status' => false,
                'message' => 'No permits found for this employee.'
            ];
        }

        return [
            'status' => true,
            'data' => $permits
        ];
    }

    public function createPermit($data, $user_id)
    {
        $employee = Employee::where('user_id', $user_id)->first();

        if (!$employee) {
            return [
                'success' => false,
                'message' => 'Employee not found for this user.'
            ];
        }

        $permit = new Permit();
        $permit->employee_id = $employee->id;
        $permit->date = $data['date'] ?? now()->toDateString();
        $permit->reason = $data['reason'] ?? null;
        $permit->save();

        return [
            'success' => true,
            'message' => 'Permit successfully created.',
            'data' => $permit
        ];
    }

    public function deletePermit($permit_id, $user_id)
    {
        $employee = Employee::where('user_id', $user_id)->first();

        if (!$employee) {
            return [
                'success' => false,
                'message' => 'Employee not found for this user.'
            ];
        }

        $permit = Permit::where('id', $permit_id)
                        ->where('employee_id', $employee->id)
                        ->first();

        if (!$permit) {
            return [
                'success' => false,
                'message' => 'Permit not found for this employee.'
            ];
        }

        $permit->delete();

        return [
            'success' => true,
            'message' => 'Permit successfully deleted.'
        ];
    }
}
