<?php

namespace App\Services;

use App\Models\Permit;
use Illuminate\Support\Facades\Validator;

class AndroidPermitsService
{
    public function createPermit($request, $user)
    {
        $validator = Validator::make($request->all(), [
            'date' => 'required|date',
            'permission' => 'required|in:izin,sakit,cuti',
            'alasan' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            abort(422, $validator->errors()->first());
        }

        $reason = $request->permission;
        if ($request->filled('alasan')) {
            $reason .= ' - ' . $request->alasan;
        }

        return Permit::create([
            'employee_id' => $user->id,
            'date' => $request->date,
            'reason' => $reason,
            'employeeIsConfirmed' => 0,
            'alternateIsConfirmed' => 0,
            'IsConfirmed' => 0,
        ]);
    }

    public function deletePermit($id, $userId)
    {
        $permit = Permit::where('id', $id)
                        ->where('employee_id', $userId)
                        ->first();

        if (!$permit) {
            return [
                'success' => false,
                'message' => 'Permit not found or unauthorized'
            ];
        }

        $permit->delete();

        return [
            'success' => true,
            'message' => 'Permit deleted successfully'
        ];
    }

    public function getUserPermits($userId)
    {
        return Permit::where('employee_id', $userId)->get();
    }
}
