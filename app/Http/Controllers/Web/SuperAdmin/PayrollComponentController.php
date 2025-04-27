<?php

namespace App\Http\Controllers\Web\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payroll;
use App\Models\PayrollComponent;

class PayrollComponentController extends Controller
{
    public function index(Payroll $payroll)
    {
        $payrollComponents = PayrollComponent::where("payroll_id", $payroll->id)->get();
        $payrollPeriodId = $payroll->payroll_period_id;
        return view('super_admin.payroll.component.index', compact('payrollComponents', 'payrollPeriodId', 'payroll'));
    }


    public function store(Request $request, Payroll $payroll)
    {
        // Delete existing components for this payroll
        PayrollComponent::where('payroll_id', $payroll->id)->delete();

        // Get arrays from request
        $names = $request->input('name', []);
        $amounts = $request->input('amount', []);
        $types = $request->input('type', []);

        // Create new components
        for ($i = 0; $i < count($names); $i++) {
            if (!empty($names[$i]) && !empty($amounts[$i]) && !empty($types[$i])) {
                PayrollComponent::create([
                    'payroll_id' => $payroll->id,
                    'name' => $names[$i],
                    'amount' => $amounts[$i],
                    'type' => $types[$i]
                ]);
            }
        }

        return redirect()
            ->route('superadmin.payroll.component.index', $payroll->id)
            ->with('success', 'Komponen gaji berhasil disimpan');
    }
}
