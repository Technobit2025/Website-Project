<?php

namespace App\Http\Controllers\HumanResource;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use App\Models\Role;
use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\UserRequest;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('human_resource.employee.index', compact('employees'));
    }

    public function create()
    {
        $roles = Role::all()->where('code', '!=', 'super_admin');
        return view('human_resource.employee.create', compact('roles'));
    }

    public function store(EmployeeRequest $employeeRequest, UserRequest $userRequest)
    {
        $validatedUser = $userRequest->validated();
        $validatedEmployee = $employeeRequest->validated();

        $user = User::create(array_merge($validatedUser, [
            'role_id' => 4,
        ]));

        Employee::create(array_merge($validatedEmployee, [
            'user_id' => $user->id,
        ]));

        return redirect()->route('human_resource.employee.index')->with('success', 'Karyawan berhasil ditambahkan!');
    }
}
