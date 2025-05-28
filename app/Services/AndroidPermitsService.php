<?php

namespace App\Services;

use App\Models\Permit;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;


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

    // Menambahkan metode untuk memanggil stored procedure
    public function getPermitsByEmployee($employeeId)
    {
        return DB::select('CALL get_permits_by_employee_id(?)', [$employeeId]);
    }

    public function getSchedulesByEmployee($employeeId)
    {
        return DB::select('CALL get_schedules_by_employee_id(?)', [$employeeId]);
    }

    public function updateConfirmationStatus($data, $user_id)
{
    $employee = Employee::where('user_id', $user_id)->first();

    if (!$employee) {
        return [
            'success' => false,
            'message' => 'Employee not found.'
        ];
    }

    $permit = Permit::where('id', $data['permit_id'])->first();

    if (!$permit) {
        return [
            'success' => false,
            'message' => 'Permit not found.'
        ];
    }

    // Validasi enum
    $allowed = ['approved', 'rejected'];
    if (!in_array($data['status'], $allowed)) {
        return [
            'success' => false,
            'message' => 'Invalid status value.'
        ];
    }

    // Cek apakah yang mengubah adalah employee atau alternate
    if ($permit->employee_id == $employee->id) {
        $permit->employee_is_confirmed = $data['status'];
    } elseif ($permit->alternate_id == $employee->id) {
        $permit->alternate_is_confirmed = $data['status'];
    } else {
        return [
            'success' => false,
            'message' => 'You are not part of this permit request.'
        ];
    }

    // Update status jadwal jika keduanya menyetujui
    if (
        $permit->employee_is_confirmed === 'approved' &&
        $permit->alternate_is_confirmed === 'approved'
    ) {
        DB::beginTransaction();
        try {
            $permit->status = 'approved';

            // Update jadwal alternate
            $alternate = Employee::find($permit->alternate_id);
            $alternate->schedule_id = $permit->employee_schedule_id;
            $alternate->save();

            $permit->save();

            DB::commit();
            return [
                'success' => true,
                'message' => 'Permit approved by both parties. Schedule updated.',
                'data' => $permit
            ];
        } catch (\Exception $e) {
            DB::rollBack();
            return [
                'success' => false,
                'message' => 'Failed to update schedule.',
                'error' => $e->getMessage()
            ];
        }
    }

    $permit->save();

    return [
        'success' => true,
        'message' => 'Confirmation updated.',
        'data' => $permit
    ];
}
}
