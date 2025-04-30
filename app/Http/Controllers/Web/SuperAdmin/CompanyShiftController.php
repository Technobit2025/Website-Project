<?php

namespace App\Http\Controllers\Web\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyShiftRequest;
use App\Models\Company;
use App\Models\CompanyShift;

class CompanyShiftController extends Controller
{
    public function index(Company $company)
    {
        $shifts = CompanyShift::where('company_id', $company->id)->get();
        return view('super_admin.company.shift.index', compact('company', 'shifts'));
    }
    public function store(CompanyShiftRequest $companyShiftRequest)
    {
        $validated = $companyShiftRequest->validated();
        CompanyShift::create($validated);
        return redirect()->route('superadmin.company.shift.index', $companyShiftRequest['company_id'])->with('success', 'Shift berhasil ditambahkan.');
    }

    public function show(CompanyShift $companyShift)
    {
        return view('super_admin.company.shift.show', compact('companyShift'));
    }

    public function edit(CompanyShift $companyShift) //create
    {
        return view('super_admin.company.shift.edit', compact('companyShift'));
    }

    public function update(CompanyShiftRequest $companyShiftRequest, CompanyShift $companyShift)
    {
        $validated = $companyShiftRequest->validated();
        $companyShift->update($validated);
        return redirect()->route('superadmin.company.shift.index', $companyShift->company_id)->with('success', 'Shift berhasil diubah.');
    }

    public function destroy(CompanyShift $companyShift)
    {
        $companyId = $companyShift->company_id;
        $companyShift->delete();
        return redirect()->route('superadmin.company.shift.index', $companyId)->with('success', 'Shift berhasil dihapus.');
    }
}
