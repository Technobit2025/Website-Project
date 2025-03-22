<?php

namespace App\Http\Controllers\Web\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyShiftRequest;
use App\Models\Company;
use App\Models\CompanyShift;
use Illuminate\Support\Facades\Auth;

class CompanyShiftController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $company = Company::findOrFail($user->employee->company_id);
        $shifts = CompanyShift::where('company_id', $company->id)->get();
        return view('company.shift.index', compact('company', 'shifts'));
    }

    public function create() //create
    {
        $user = Auth::user();
        $company = Company::findOrFail($user->employee->company_id);
        return view('company.shift.create', compact('company'));
    }
    public function store(CompanyShiftRequest $companyShiftRequest)
    {
        $user = Auth::user();
        $company = Company::findOrFail($user->employee->company_id);
        $validated = $companyShiftRequest->validated();
        $validated['company_id'] = $company->id;
        CompanyShift::create($validated);
        return redirect()->route('company.shift.index')->with('success', 'Shift berhasil ditambahkan.');
    }

    public function show(CompanyShift $companyShift)
    {
        return view('company.shift.show', compact('companyShift'));
    }

    public function edit(CompanyShift $companyShift) //create
    {
        return view('company.shift.edit', compact('companyShift'));
    }

    public function update(CompanyShiftRequest $companyShiftRequest, CompanyShift $companyShift)
    {
        $validated = $companyShiftRequest->validated();
        $companyShift->update($validated);
        return redirect()->route('company.shift.index')->with('success', 'Shift berhasil diubah.');
    }

    public function destroy(CompanyShift $companyShift)
    {
        $companyShift->delete();
        return redirect()->route('company.shift.index')->with('success', 'Shift berhasil dihapus.');
    }
}
