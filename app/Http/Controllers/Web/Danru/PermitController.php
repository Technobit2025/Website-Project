<?php

namespace App\Http\Controllers\Web\Danru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompanySchedule;
use App\Models\Permit;
use App\Models\Employee;
use App\Mail\PermitNotificationMail;
use App\Mail\AlternateNotificationMail;
use Illuminate\Support\Facades\Mail;

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

        return redirect()->route('danru.permit.index')->with('success', 'Perizinan berhasil ditambahkan.');
    }

    public function show(Permit $permit)
    {
        $permit->load([
            'employee',
            'alternate',
            'employeeCompanySchedule',
            'alternateCompanySchedule',
            'employeeCompanySchedule.companyShift',
            'alternateCompanySchedule.companyShift'
        ]);

        $alternates = Employee::where("id", "!=", $permit->employee_id)->get();
        return view('danru.permit.show', compact('permit', 'alternates'));
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
            // 'employee_id' => 'required|exists:employees,id',
            'alternate_id' => 'nullable|exists:employees,id',
            // 'employee_schedule_id' => 'nullable|exists:company_schedules,id',
            'alternate_schedule_id' => 'nullable|exists:company_schedules,id',
        ]);

        $permit->update($validated);

        return redirect()->route('danru.permit.index')->with('success', 'Perizinan berhasil diperbarui.');
    }

    public function destroy(Permit $permit)
    {
        $permit->delete();
        return redirect()->route('danru.permit.index')->with('success', 'Perizinan berhasil dihapus.');
    }
    public function getJadwal(Request $request, Employee $employee)
    {
        $employeeId = $employee->id;

        if (!$employeeId) {
            return response()->json([
                'success' => false,
                'message' => 'Employee ID is required.'
            ], 400);
        }

        $schedules = CompanySchedule::where('employee_id', $employeeId)
            ->where('date', '>=', now()->toDateString())
            ->orderBy('date', 'asc')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $schedules
        ]);
    }
    public function sendMail(Permit $permit)
    {
        $permit->load(['employee', 'alternate']);

        $employeeEmail = $permit->employee->user?->email;
        $alternateEmail = $permit->alternate->user?->email;

        // dd($permit, $employeeEmail, $alternateEmail);
        if (!$employeeEmail && !$alternateEmail) {
            return back()->with('error', 'Email tidak ditemukan untuk karyawan atau pengganti.');
        }

        if ($employeeEmail) {
            Mail::to($employeeEmail)->send(new PermitNotificationMail($permit));
        }

        if ($alternateEmail) {
            Mail::to($alternateEmail)->send(new AlternateNotificationMail($permit));
        }

        return back()->with('success', 'Email berhasil dikirim ke karyawan dan pengganti.');
    }
}
