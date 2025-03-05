<?php

namespace App\Http\Controllers\Web\Treasurer;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use App\Models\Role;
use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function salaryIndex()
    {
        $employees = Employee::all();
        return view('treasurer.employee_salary.index', compact('employees'));
    }

    public function salaryShow(Employee $employee)
    {
        return view('treasurer.employee_salary.show', compact('employee'));
    }

    public function salaryCreate(Employee $employee)
    {
        return view('treasurer.employee_salary.create', compact('employee'));
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

        return redirect()->route('treasurer.employeesalary.index')->with('success', 'Gaji Karyawan berhasil ditambahkan!');
    }

    public function salaryEdit(Employee $employee)
    {
        return view('treasurer.employee_salary.edit', compact('employee'));
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

        return redirect()->route('treasurer.employeesalary.index')->with('success', 'Gaji Karyawan berhasil diubah!');
    }

    public function salaryDestroy(Employee $employee)
    {
        $employee->update(['salary' => null]);
        return redirect()->route('treasurer.employeesalary.index')->with('success', 'Gaji Karyawan berhasil dihapus!');
    }
}
