<?php

namespace App\Http\Controllers\Web\SuperAdmin;

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
        $roles = Role::all()->where('code', '!=', 'super_admin');
        return view('super_admin.employee.index', compact('employees', 'roles'));
    }

    public function show(Employee $employee)
    {
        return view('super_admin.employee.show', compact('employee'));
    }

    public function create()
    {
        $roles = Role::all()->where('code', '!=', 'super_admin');
        return view('super_admin.employee.create', compact('roles'));
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

        return redirect()->route('superadmin.employee.index')->with('success', 'Karyawan berhasil ditambahkan!');
    }

    public function edit(Employee $employee)
    {
        $roles = Role::all()->where('code', '!=', 'super_admin');
        return view('super_admin.employee.edit', compact('employee', 'roles'));
    }

    public function update(EmployeeRequest $employeeRequest, UserRequest $userRequest, Employee $employee)
    {
        $validatedUser = $userRequest->validated();
        $validatedEmployee = $employeeRequest->validated();

        $employee->user->update($validatedUser);
        $employee->update($validatedEmployee);

        return redirect()->route('superadmin.employee.index')->with('success', 'Karyawan berhasil diubah!');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        User::where('id', $employee->user->id)->delete();
        return redirect()->route('superadmin.employee.index')->with('success', 'Karyawan berhasil dihapus!');
    }
}
