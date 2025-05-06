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
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ScheduleController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if (!$user) {
            return view('global.attendance.index', compact(
                'isEmployee',
                'isCheckedIn',
                'isCheckedOut',
                'isHaveSchedule'
            ))->with('warning', 'Anda belum login');
        }

        $employee = Employee::where('user_id', $user->id)->first();

        $employees = Employee::where('company_id', $employee->company_id)->get();
        $shifts = CompanyShift::where('company_id', $employee->company_id)->get();

        $currentMonth = Carbon::now()->format('Y-m');

        $schedules = CompanySchedule::whereMonth('date', Carbon::parse($currentMonth)->month)
            ->whereYear('date', Carbon::parse($currentMonth)->year)
            ->get();

        $daysInMonth = Carbon::parse($currentMonth)->daysInMonth;
        return view("global.schedule.index", compact('employees', 'shifts', 'schedules', 'daysInMonth', 'currentMonth'));
    }
}
