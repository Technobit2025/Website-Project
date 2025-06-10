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

        $employee = Employee::where('user_id', $user->id)->first();

        if (!$employee) {
            return redirect()->back()->with('error', 'Data karyawan tidak ditemukan.');
        }

        $permits = Permit::with([
            'alternate:id,fullname'
        ])
            ->where('employee_id', $employee->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('global.permit.index', compact('permits', 'employee'));
    }
    public function show(Permit $permit)
    {
        $user = Auth::user();

        $employee = Employee::where('user_id', $user->id)->first();

        if (!$employee) {
            return redirect()->back()->with('error', 'Data karyawan tidak ditemukan.');
        }

        if ($permit->employee_id !== $employee->id) {
            abort(403, 'Anda tidak memiliki akses ke data ini.');
        }

        $permit->load([
            'employee',
            'alternate',
            'employeeCompanySchedule',
            'alternateCompanySchedule',
            'employeeCompanySchedule.companyShift',
            'alternateCompanySchedule.companyShift'
        ]);

        return view('global.permit.show', compact('permit', 'employee'));
    }
    public function create()
    {
        $user = Auth::user();

        $employee = Employee::where('user_id', $user->id)->first();

        if (!$employee) {
            return redirect()->back()->with('error', 'Data karyawan tidak ditemukan.');
        }
        $schedules = CompanySchedule::where('employee_id', $employee->id)
            ->where('date', '>=', now()->toDateString())
            ->get();
        return view('global.permit.create', compact('employee', 'schedules'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $employee = Employee::where('user_id', $user->id)->first();

        if (!$employee) {
            return redirect()->back()->with('error', 'Data karyawan tidak ditemukan.');
        }

        $validated = $request->validate([
            'employee_schedule_id' => 'required|exists:company_schedules,id',
            'type' => 'required|string|in:Sick Leave,Leave,Absent,Late,Leave Early,WFH',
            'reason' => 'required|string|max:1000',
        ]);

        $schedule = CompanySchedule::find($validated['employee_schedule_id']);
        if (!$schedule) {
        return redirect()->back()->with('error', 'Jadwal tidak ditemukan.');
        }
        $permit = Permit::create([
            'employee_id' => $employee->id,
            'employee_schedule_id' => $validated['employee_schedule_id'],
            'type' => $validated['type'],
            'date' => $schedule->date,
            'reason' => $validated['reason'],
        ]);

        return redirect()->route('permit.index')->with('success', 'Pengajuan izin berhasil dikirim.');
    }


    public function destroy(Permit $permit)
    {
        if (!$permit) {
            return redirect()->route('permit.index')->with('error', 'Data izin tidak ditemukan.');
        }

        $permit->delete();

        return redirect()->route('permit.index')->with('success', 'Data izin berhasil dihapus.');
    }

    public function confirm(Permit $permit, Request $request)
    {
        $user = Auth::user();

        $employee = Employee::where('user_id', $user->id)->first();

        if (!$employee) {
            return redirect()->back()->with('error', 'Data karyawan tidak ditemukan.');
        }

        if ($permit->employee_id !== $employee->id) {
            abort(403, 'Anda tidak memiliki akses untuk mengkonfirmasi izin ini.');
        }

        if ($permit->employee_is_confirmed !== 'pending') {
            return redirect()->route('permit.index')->with('error', 'Izin sudah dikonfirmasi sebelumnya.');
        }

        $permit->employee_is_confirmed = $request->value;
        $permit->save();

        return redirect()->route('permit.show', $permit->id)->with('success', 'Izin berhasil dikonfirmasi.');
    }



    public function alternationIndex()
    {
        $user = Auth::user();

        $alternate = Employee::where('user_id', $user->id)->first();

        if (!$alternate) {
            return redirect()->back()->with('error', 'Data karyawan tidak ditemukan.');
        }

        $permits = Permit::with([
            'employee:id,fullname'
        ])
            ->where('alternate_id', $alternate->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('global.alternation.index', compact('permits', 'alternate'));
    }
    public function alternationShow(Permit $permit)
    {
        $user = Auth::user();

        $alternate = Employee::where('user_id', $user->id)->first();

        if (!$alternate) {
            return redirect()->back()->with('error', 'Data karyawan tidak ditemukan.');
        }

        if ($permit->alternate_id !== $alternate->id) {
            abort(403, 'Anda tidak memiliki akses ke data ini.');
        }

        $permit->load([
            'employee',
            'alternate',
            'employeeCompanySchedule',
            'alternateCompanySchedule',
            'employeeCompanySchedule.companyShift',
            'alternateCompanySchedule.companyShift'
        ]);

        return view('global.alternation.show', compact('permit', 'alternate'));
    }

    public function alternationConfirm(Permit $permit, Request $request)
    {
        $user = Auth::user();

        $alternate = Employee::where('user_id', $user->id)->first();

        if (!$alternate) {
            return redirect()->back()->with('error', 'Data karyawan tidak ditemukan.');
        }

        if ($permit->alternate_id !== $alternate->id) {
            abort(403, 'Anda tidak memiliki akses untuk mengkonfirmasi izin ini.');
        }

        if ($permit->alternate_is_confirmed !== 'pending') {
            return redirect()->route('alternation.index')->with('error', 'Izin sudah dikonfirmasi sebelumnya.');
        }

        $permit->alternate_is_confirmed = $request->value;
        $permit->save();

        return redirect()->route('alternation.show', $permit->id)->with('success', 'Izin berhasil dikonfirmasi.');
    }
}
