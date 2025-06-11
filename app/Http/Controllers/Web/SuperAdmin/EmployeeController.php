<?php

namespace App\Http\Controllers\Web\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use App\Models\Role;
use App\Models\Company;
use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        $roles = Role::where('code', '!=', 'super_admin')->where('code', '!=', 'company')->get();
        return view('super_admin.employee.index', compact('employees', 'roles'));
    }

    public function show(Employee $employee)
    {
        return view('super_admin.employee.show', compact('employee'));
    }

    public function create()
    {
        $roles = Role::where('code', '!=', 'super_admin')->where('code', '!=', 'company')->get();
        $companies = Company::all();
        return view('super_admin.employee.create', compact('roles','companies'));
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
            'company_id' =>$companyId,
        ]));
        
        return redirect()->route('superadmin.employee.index')->with('success', 'Karyawan berhasil ditambahkan!');
    }

    public function edit(Employee $employee)
    {
        $roles = Role::where('code', '!=', 'super_admin')->where('code', '!=', 'company')->get();
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
        $employee->user->delete();
        $employee->delete();
        return redirect()->route('superadmin.employee.index')->with('success', 'Karyawan berhasil dihapus!');
    }


    // EMPLOYEE SALARY
    public function salaryIndex()
    {
        $employees = Employee::all();
        return view('super_admin.employee_salary.index', compact('employees'));
    }

    public function salaryShow(Employee $employee)
    {
        return view('super_admin.employee_salary.show', compact('employee'));
    }

    public function salaryCreate(Employee $employee)
    {
        return view('super_admin.employee_salary.create', compact('employee'));
    }

    public function salaryStore(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'salary' => 'required|numeric',
        ], [
            'salary.required' => 'Gaji harus diisi!',
            'salary.numeric' => 'Gaji harus berupa angka!',
        ]);

        $employee->update($validated);

        return redirect()->route('superadmin.employeesalary.index')->with('success', 'Gaji Karyawan berhasil ditambahkan!');
    }

    public function salaryEdit(Employee $employee)
    {
        return view('super_admin.employee_salary.edit', compact('employee'));
    }

    public function salaryUpdate(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'salary' => 'required|numeric',
        ], [
            'salary.required' => 'Gaji harus diisi!',
            'salary.numeric' => 'Gaji harus berupa angka!',
        ]);

        $employee->update($validated);

        return redirect()->route('superadmin.employeesalary.index')->with('success', 'Gaji Karyawan berhasil diubah!');
    }

    public function salaryDestroy(Employee $employee)
    {
        $employee->update(['salary' => null]);
        return redirect()->route('superadmin.employeesalary.index')->with('success', 'Gaji Karyawan berhasil dihapus!');
    }
}
