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
    // public function __construct()
    // {
    //     // Gunakan Laravel Sanctum untuk autentikasi user
    //     $this->user = Auth::user();

    //     if (!$this->user) {
    //         // Tangani akses tidak sah dengan melemparkan pengecualian
    //         throw new \Illuminate\Auth\AuthenticationException('Anda harus login untuk mengakses sumber daya ini');
    //     }

    //     $this->user_id = $this->user->id;
    //     $this->employee = Employee::where('user_id', $this->user_id)->first();
    // }

    /*========= GET =========*/
    public function getUserProfile()
    {
        $user = Auth::user();
        if (!$user) {
            return $this->notFoundResponse('User not found');
        }
        return $this->successResponse($user, 'User retrieved successfully');
    }

    public function getEmployeeProfile()
    {
        $user = Auth::user();
        if (!$user) {
            return $this->notFoundResponse('User not found');
        }

        $employee = Employee::where('user_id', $user->id)->first();
        if (!$employee) {
            return $this->notFoundResponse('Employee not found');
        }

        return $this->successResponse($employee, 'Employee retrieved successfully');
        /*========= LAWAS =========*/
        // {
        //     if (!$this->user) {
        //         return $this->notFoundResponse('User not found');
        //     }
        //     if (!$this->employee) {
        //         return $this->notFoundResponse('Employee not found');
        //     }
        //     return $this->successResponse($this->employee, 'Employee retrieved successfully');
        // }

    }


    /*========= PUT =========*/
    public function updateUserProfile(UserRequest $request)
    {
        $user = Auth::user();
        if (!$user) {
            return $this->notFoundResponse('User not found');
        }

        $validated = $request->validated();

        if (!empty($validated['password'])) {
            if (empty($validated['current_password']) || !Hash::check($validated['current_password'], $user->password)) {
                return $this->clientErrorResponse(['current_password' => 'Password lama salah.']);
            }
        } else {
            unset($validated['password']);
        }

        $user->fill($validated);
        $user->save();

        return $this->successResponse($user, 'User updated successfully');

        /*========= LAWAS =========*/
        // {
        //     $user = Auth::user();
        //     if (!$this->user) {
        //         return $this->notFoundResponse('User not found');
        //     }
        //     $validated = $request->validated();

        //     // Cek password lama kalau user mau ganti password
        //     if (!empty($validated['password'])) {
        //         if (empty($validated['current_password']) || !Hash::check($validated['current_password'], $this->user->password)) {
        //             return $this->clientErrorResponse(['current_password' => 'Password lama salah.']);
        //         }
        //     } else {
        //         unset($validated['password']); // Jangan update kalau kosong
        //     }

        //     $this->user->fill($validated);
        //     $this->user->save();

        //     return $this->successResponse($this->user, 'User updated successfully');
        // }
    }


    public function updateEmployeeProfile(EmployeeRequest $request)
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

        $employee->fill($validated);
        $employee->save();

        return $this->successResponse($employee, 'Employee updated successfully');
        /*========= LAWAS =========*/
        // if (!$this->user) {
        //     return $this->notFoundResponse('User not found');
        // }
        // if (!$this->employee) {
        //     return $this->notFoundResponse('Employee not found');
        // }
        // $validated = $request->validated();

        // $this->employee->fill($validated);
        // $this->employee->save();

        // return $this->successResponse($this->employee, 'Employee updated successfully');
    }
}
