<?php

namespace App\Http\Controllers\Web\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PayrollRequest;
use App\Models\Employee;
use App\Models\Payroll;
use App\Models\PayrollComponent;
use App\Models\PayrollPeriod;

class PayrollController extends Controller
{
    public function index(PayrollPeriod $payrollPeriod)
    {
        // $employees = Employee::whereDoesntHave('payrolls', function ($query) use ($payrollPeriod) {
        //     $query->where('payroll_period_id', $payrollPeriod->id);
        // })->get();
        $employees = Employee::all();
        $payrollPeriodId = $payrollPeriod->id;
        return view("super_admin.payroll.index", compact("employees", "payrollPeriodId"));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'payroll_period_id' => 'required|exists:payroll_periods,id',
        ]);

        $employee = Employee::find($validated["employee_id"]);
        $payroll = Payroll::create($validated);
        $payrollComponent = PayrollComponent::create([
            "name" => "Gaji Pokok",
            "payroll_id" => $payroll->id,
            "type" => "basic",
            "amount" => $employee->salary
        ]);
        return redirect()->route('superadmin.payroll.component.index', $payroll->id);
    }

    public function destroy(Payroll $payroll)
    {
        $payroll->delete();

        return redirect()->route('superadmin.payroll.index')
            ->with('success', 'Payroll berhasil dihapus.');
    }
}
