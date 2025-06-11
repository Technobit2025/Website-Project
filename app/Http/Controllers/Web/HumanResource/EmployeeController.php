<?php

namespace App\Http\Controllers\Web\HumanResource;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use App\Models\Role;
use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\Company;


class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        $roles = Role::all()->where('code', '!=', 'super_admin');
        return view('human_resource.employee.index', compact('employees', 'roles'));
    }

    public function show(Employee $employee)
    {
        return view('human_resource.employee.show', compact('employee'));
    }

    public function create()
    {
        $roles = Role::all()->where('code', '!=', 'super_admin');
        $companies = Company::all();
        return view('human_resource.employee.create', compact('roles','companies'));
    }

    public function store(EmployeeRequest $employeeRequest, UserRequest $userRequest)
    {
        $validatedUser = $userRequest->validated();
        $validatedEmployee = $employeeRequest->validated();

        $user = User::create(array_merge($validatedUser, [
            'role_id' => $validatedUser['role'],
        ]));
        $companyId = $validatedEmployee['company'];
        unset($validatedEmployee['company']);

        Employee::create(array_merge($validatedEmployee, [
            'user_id' => $user->id,
            'company_id' => $companyId,
        ]));

        return redirect()->route('humanresource.employee.index')->with('success', 'Karyawan berhasil ditambahkan!');
    }

    public function edit(Employee $employee)
    {
        $roles = Role::all()->where('code', '!=', 'super_admin');
        return view('human_resource.employee.edit', compact('employee', 'roles'));
    }

    public function update(EmployeeRequest $employeeRequest, UserRequest $userRequest, Employee $employee)
    {
        $validatedUser = $userRequest->validated();
        $validatedEmployee = $employeeRequest->validated();

        $employee->user->update($validatedUser);
        $employee->update($validatedEmployee);

        return redirect()->route('humanresource.employee.index')->with('success', 'Karyawan berhasil diubah!');
    }

    public function destroy(Employee $employee)
    {
        $employee->user->delete();
        $employee->delete();
        return redirect()->route('humanresource.employee.index')->with('success', 'Karyawan berhasil dihapus!');
    }

    // EMPLOYEE SALARY
    public function salaryIndex()
    {
        $employees = Employee::all();
        return view('human_resource.employee_salary.index', compact('employees'));
    }

    public function salaryShow(Employee $employee)
    {
        return view('human_resource.employee_salary.show', compact('employee'));
    }
}
