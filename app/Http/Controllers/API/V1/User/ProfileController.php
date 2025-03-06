<?php

namespace App\Http\Controllers\API\V1\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use App\Models\User;

use App\Http\Controllers\API\APIController;

class ProfileController extends APIController
{
    protected $user_id;
    protected $user;
    protected $employee;
    public function __construct()
    {
        if (Auth::check()) {
            $this->user_id = Auth::user()->id;
            $this->user = User::find($this->user_id);
            $this->employee = Employee::where('user_id', $this->user_id)->first();
        } else {
            // Handle unauthorized access by throwing an exception
            throw new \Illuminate\Auth\AuthenticationException('You must be logged in to access this resource');
        }
    }

    /*========= GET =========*/
    public function getUserProfile()
    {
        if (!$this->user) {
            return $this->notFoundResponse('User not found');
        }
        return $this->successResponse($this->user, 'User retrieved successfully');
    }

    public function getEmployeeProfile()
    {
        if (!$this->user) {
            return $this->notFoundResponse('User not found');
        }
        if (!$this->employee) {
            return $this->notFoundResponse('Employee not found');
        }
        return $this->successResponse($this->employee, 'Employee retrieved successfully');
    }

    /*========= PUT =========*/
    public function updateUserProfile(UserRequest $request)
    {
        if (!$this->user) {
            return $this->notFoundResponse('User not found');
        }
        $validated = $request->validated();

        // Cek password lama kalau user mau ganti password
        if (!empty($validated['password'])) {
            if (empty($validated['current_password']) || !Hash::check($validated['current_password'], $this->user->password)) {
                return $this->clientErrorResponse(['current_password' => 'Password lama salah.']);
            }
        } else {
            unset($validated['password']); // Jangan update kalau kosong
        }

        $this->user->fill($validated);
        $this->user->save();

        return $this->successResponse($this->user, 'User updated successfully');
    }

    public function updateEmployeeProfile(EmployeeRequest $request)
    {
        if (!$this->user) {
            return $this->notFoundResponse('User not found');
        }
        if (!$this->employee) {
            return $this->notFoundResponse('Employee not found');
        }
        $validated = $request->validated();

        $this->employee->fill($validated);
        $this->employee->save();

        return $this->successResponse($this->employee, 'Employee updated successfully');
    }
}
