<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\CompanyAttendance;
use App\Models\CompanyPlace;
use App\Models\CompanySchedule;
use App\Models\CompanyShift;
use App\Models\Employee;
use App\Models\Permit;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PermitController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Get the employee record for the current user
        $employee = Employee::where('user_id', $user->id)->first();

        // If employee not found, redirect or abort
        if (!$employee) {
            return redirect()->back()->with('error', 'Data karyawan tidak ditemukan.');
        }

        // Get all permits for this employee, with related alternate and schedule info
        $permits = Permit::with([
            'alternate:id,fullname'
        ])
            ->where('employee_id', $employee->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('global.permit.index', compact('permits', 'employee'));
    }
    public function create()
    {
        $user = Auth::user();

        // Get the employee record for the current user
        $employee = Employee::where('user_id', $user->id)->first();

        // If employee not found, redirect or abort
        if (!$employee) {
            return redirect()->back()->with('error', 'Data karyawan tidak ditemukan.');
        }
        $schedules = CompanySchedule::where("employee_id", $employee->id)->get();
        return view('global.permit.create', compact('employee', 'schedules'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        // Get the employee record for the current user
        $employee = Employee::where('user_id', $user->id)->first();

        if (!$employee) {
            return redirect()->back()->with('error', 'Data karyawan tidak ditemukan.');
        }

        $validated = $request->validate([
            'employee_schedule_id' => 'required|exists:company_schedules,id',
            'type' => 'required|string|in:Sick Leave,Leave,Absent,Late,Leave Early,WFH',
            'reason' => 'required|string|max:1000',
            // 'alternate_id' => 'nullable|exists:employees,id', // Uncomment if alternate is used
        ]);

        $permit = Permit::create([
            'employee_id' => $employee->id,
            'employee_schedule_id' => $validated['employee_schedule_id'],
            'type' => $validated['type'],
            'reason' => $validated['reason'],
            // 'alternate_id' => $validated['alternate_id'] ?? null, // Uncomment if alternate is used
        ]);

        return redirect()->route('permit.index')->with('success', 'Pengajuan izin berhasil dikirim.');
    }

    public function edit($id)
    {
        $user = Auth::user();

        // Get the employee record for the current user
        $employee = Employee::where('user_id', $user->id)->first();

        if (!$employee) {
            return redirect()->back()->with('error', 'Data karyawan tidak ditemukan.');
        }

        $permit = Permit::where('id', $id)
            ->where('employee_id', $employee->id)
            ->first();

        if (!$permit) {
            return redirect()->route('permit.index')->with('error', 'Data izin tidak ditemukan.');
        }

        $schedules = CompanySchedule::where("employee_id", $employee->id)->get();

        return view('global.permit.edit', compact('permit', 'employee', 'schedules'));
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();

        // Get the employee record for the current user
        $employee = Employee::where('user_id', $user->id)->first();

        if (!$employee) {
            return redirect()->back()->with('error', 'Data karyawan tidak ditemukan.');
        }

        $permit = Permit::where('id', $id)
            ->where('employee_id', $employee->id)
            ->first();

        if (!$permit) {
            return redirect()->route('permit.index')->with('error', 'Data izin tidak ditemukan.');
        }

        $validated = $request->validate([
            'employee_schedule_id' => 'required|exists:company_schedules,id',
            'type' => 'required|string|in:Sick Leave,Leave,Absent,Late,Leave Early,WFH',
            'reason' => 'required|string|max:1000',
            // 'alternate_id' => 'nullable|exists:employees,id', // Uncomment if alternate is used
        ]);

        $permit->update([
            'employee_schedule_id' => $validated['employee_schedule_id'],
            'type' => $validated['type'],
            'reason' => $validated['reason'],
            // 'alternate_id' => $validated['alternate_id'] ?? null, // Uncomment if alternate is used
        ]);

        return redirect()->route('permit.index')->with('success', 'Data izin berhasil diperbarui.');
    }

    public function destroy(Permit $permit)
    {
        if (!$permit) {
            return redirect()->route('permit.index')->with('error', 'Data izin tidak ditemukan.');
        }

        $permit->delete();

        return redirect()->route('permit.index')->with('success', 'Data izin berhasil dihapus.');
    }
}
