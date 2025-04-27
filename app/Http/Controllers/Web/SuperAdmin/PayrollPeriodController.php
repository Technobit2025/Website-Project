<?php

namespace App\Http\Controllers\Web\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PayrollPeriodRequest;
use App\Models\PayrollPeriod;

class PayrollPeriodController extends Controller
{
    public function index()
    {
        $payrollPeriods = PayrollPeriod::all();
        return view("super_admin.payroll.period.index", compact("payrollPeriods"));
    }

    public function store(PayrollPeriodRequest $request)
    {
        $validated = $request->validated();

        PayrollPeriod::create($validated);
        return redirect()->route('superadmin.payroll.period.index')
            ->with('success', 'Periode Payroll berhasil ditambahkan.');
    }

    public function update(PayrollPeriodRequest $request, PayrollPeriod $payrollPeriod)
    {
        $validated = $request->validated();

        $payrollPeriod->update($validated);

        return redirect()->route('superadmin.payroll.period.index')
            ->with('success', 'Periode Payroll berhasil diperbarui.');
    }

    public function destroy(PayrollPeriod $payrollPeriod)
    {
        $payrollPeriod->delete();

        return redirect()->route('superadmin.payroll.period.index')
            ->with('success', 'Periode Payroll berhasil dihapus.');
    }
}
