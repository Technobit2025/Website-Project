<?php

namespace App\Http\Controllers\API\User;

use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use App\Http\Controllers\API\APIController;

class ProfileController extends APIController
{
    public function show()
    {
        $user = Auth::user();
        if (!$user) {
            return $this->notFoundResponse('User not found');
        }
        return $this->successResponse($user, 'User retrieved successfully');
    }

    public function update(UserRequest $request)
    {
        $user = Auth::user();
        if (!$user) {
            return $this->notFoundResponse('User not found');
        }
        $validated = $request->validated();

        // Cek password lama kalau user mau ganti password
        if (!empty($validated['password'])) {
            if (empty($validated['current_password']) || !Hash::check($validated['current_password'], $user->password)) {
                return $this->clientErrorResponse(['current_password' => 'Password lama salah.']);
            }
        } else {
            unset($validated['password']); // Jangan update kalau kosong
        }

        $user->fill($validated);
        $user->save();

        return $this->successResponse($user, 'User updated successfully');
    }

    public function updateEmployee(EmployeeRequest $request)
    {
        $user = Auth::user();
        if (!$user) {
            return $this->notFoundResponse('User not found');
        }
        $employee = Employee::where('user_id', $user->id)->first();
        if (!$employee) {
            return $this->notFoundResponse('Employee not found');
        }
        $validated = $request->validated();

        $employee->update($validated);

        return $this->successResponse($employee, 'Employee updated successfully');
    }
}
