<?php

namespace App\Http\Controllers\Web\Danru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompanySchedule;
use App\Models\Permit;
use App\Models\Employee;

class PermitController extends Controller
{
    public function index()
    {
        $permits = Permit::with([
            'employee',
            'alternate',
            'employeeCompanySchedule',
            'alternateCompanySchedule',
            'employeeCompanySchedule.companyShift',
            'alternateCompanySchedule.companyShift'
        ])->get();

        return view('danru.permit.index', compact('permits'));
    }

    public function create()
    {
        $employees = Employee::all();
        // You may want to fetch schedules as well if needed for the form
        $schedules = CompanySchedule::all();
        return view('danru.permit.create', compact('employees', 'schedules'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'alternate_id' => 'nullable|exists:employees,id',
            'employee_schedule_id' => 'nullable|exists:company_schedules,id',
            'alternate_schedule_id' => 'nullable|exists:company_schedules,id',
            'isConfirmed' => 'sometimes|boolean',
            'reason' => 'nullable|string',
        ]);

        $permit = Permit::create($validated);

        return redirect()->route('danru.permit.index')->with('success', 'Permit berhasil ditambahkan.');
    }

    public function show(Permit $permit)
    {
        $permit->load(['employee', 'alternate', 'employeeSchedule', 'alternateSchedule']);
        return view('danru.permit.show', compact('permit'));
    }

    // public function edit(Permit $permit)
    // {
    //     $employees = Employee::all();
    //     // $schedules = CompanySchedule::all();
    //     return view('danru.permit.edit', compact('permit', 'employees'));
    // }

    public function update(Request $request, Permit $permit)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'alternate_id' => 'nullable|exists:employees,id',
            'employee_schedule_id' => 'nullable|exists:company_schedules,id',
            'alternate_schedule_id' => 'nullable|exists:company_schedules,id',
            'isConfirmed' => 'sometimes|boolean',
            'reason' => 'nullable|string',
        ]);

        $permit->update($validated);

        return redirect()->route('danru.permit.index')->with('success', 'Permit berhasil diperbarui.');
    }

    public function destroy(Permit $permit)
    {
        $permit->delete();
        return redirect()->route('danru.permit.index')->with('success', 'Permit berhasil dihapus.');
    }
}
