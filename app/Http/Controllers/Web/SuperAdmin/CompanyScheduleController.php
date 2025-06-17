<?php

namespace App\Http\Controllers\Web\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanySchedule;
use App\Models\CompanyShift;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CompanyScheduleController extends Controller
{
    public function index(Company $company, Request $request)
    {
    $companyId = $company->id;
    $companyName = $company->name;

    $employees = Employee::where('company_id', $companyId)->get();
    $shifts = CompanyShift::where('company_id', $companyId)->get();

    $currentMonth = $request->input('month', Carbon::now()->format('Y-m'));
    $startOfMonth = Carbon::parse($currentMonth)->startOfMonth();
    $endOfMonth = Carbon::parse($currentMonth)->endOfMonth();

    $schedules = CompanySchedule::whereBetween('date', [$startOfMonth, $endOfMonth])
        ->whereIn('employee_id', $employees->pluck('id'))
        ->get();

    $daysInMonth = $startOfMonth->daysInMonth;

    return view('super_admin.company.schedule.index', compact(
        'employees',
        'companyName',
        'shifts',
        'schedules',
        'currentMonth',
        'daysInMonth',
        'companyId'
    ));
    }

    public function save(Request $request)
{
    $validated = $request->validate([
        'company_id' => 'required|exists:companies,id',
        'employee_id' => 'required|exists:employees,id',
        'date' => 'required|date',
        'company_shift_id' => 'required|exists:company_shifts,id',
        'old_date' => 'nullable|date',
        'old_employee' => 'nullable|exists:employees,id'
    ]);

    // Jika ada data lama (drag-and-drop dari cell lain)
    if ($validated['old_date'] && $validated['old_employee']) {
        CompanySchedule::where([
            'company_id' => $validated['company_id'],
            'employee_id' => $validated['old_employee'],
            'date' => $validated['old_date'],
            'company_shift_id' => $validated['company_shift_id'], // tambah shift_id agar hanya hapus yang dipindahkan
        ])->delete();
    }

    // Simpan shift baru (tanpa hapus data lain)
    $schedule = CompanySchedule::create([
        'company_id' => $validated['company_id'],
        'employee_id' => $validated['employee_id'],
        'date' => $validated['date'],
        'company_shift_id' => $validated['company_shift_id']
    ]);

    return response()->json(['message' => 'Schedule saved!', 'data' => $schedule]);
}


    public function destroy(Request $request)
    {
        $deleted = CompanySchedule::where([
            'company_id' => $request->company_id,
            'employee_id' => $request->employee_id
        ])->where('date', $request->date)->delete();

        return response()->json(['success' => $deleted]);
    }
}
