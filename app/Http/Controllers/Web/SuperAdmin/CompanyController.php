<?php

namespace App\Http\Controllers\Web\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Models\Employee;

class CompanyController extends Controller
{
    /**
     * Display a listing of company.
     */
    public function index()
    {
        $companies = Company::all();
        return view('super_admin.company.index', compact('companies'));
    }

    /**
     * Show form for creating a new company.
     */
    public function create()
    {
        return view('super_admin.company.create');
    }

    /**
     * Store a newly created company.
     */
    public function store(CompanyRequest $companyRequest)
    {
        $validatedCompany = $companyRequest->validated();
        // Proses file upload jika ada
        if ($companyRequest->hasFile('logo')) {
            $file = $companyRequest->file('logo');
            $validatedCompany['logo'] = uploadFile($file, 'company/logo');
        }
        Company::create($validatedCompany);
        return redirect()->route('superadmin.company.index')->with('success', 'Perusahaan berhasil ditambahkan.');
    }

    /**
     * Display the specified company.
     */
    public function show(Company $company)
    {
        return view('super_admin.company.show', compact('company'));
    }

    /**
     * Show form for editing the specified company.
     */
    public function edit(Company $company)
    {
        return view('super_admin.company.edit', compact('company'));
    }

    /**
     * Update the specified company.
     */
    public function update(CompanyRequest $companyRequest, Company $company)
    {
        $validatedCompany = $companyRequest->validated();

        if ($companyRequest->hasFile('logo')) {
            $file = $companyRequest->file('logo');
            // Hapus file lama jika ada
            if ($company->logo) {
                deleteFile('company/logo/' . basename($company->logo));
            }
            $validatedCompany['logo'] = uploadFile($file, 'company/logo');
        }
        $company->update($validatedCompany);
        return redirect()->route('superadmin.company.index')->with('success', 'Perusahaan berhasil diupdate.');
    }

    /**
     * Remove the specified company.
     */
    public function destroy(Company $company)
    {
        if ($company->logo) {
            deleteFile('company/logo/' . basename($company->logo));
        }
        $company->delete();
        return redirect()->route('superadmin.company.index')->with('success', 'Perusahaan berhasil dihapus.');
    }

    public function employeeIndex($companyId)
    {
        $company = Company::findOrFail($companyId);
        $employees = Employee::where('company_id', $companyId)->get();
        $employeeNotInCompany = Employee::whereNull('company_id')->get();
        return view('super_admin.company.employee.index', compact('company', 'employees', 'employeeNotInCompany'));
    }

    public function employeeStore($companyId, Request $request)
    {
        $validated = $request->validate([
            'company_id' => 'required|exists:companies,id',
            'employee_id' => 'required|exists:employees,id',
        ], [
            'company_id.required' => 'ID perusahaan harus diisi.',
            'company_id.exists' => 'ID perusahaan tidak valid.',
            'employee_id.required' => 'ID karyawan harus diisi.',
            'employee_id.exists' => 'ID karyawan tidak valid.',
        ]);

        $employee = Employee::find($request->employee_id);
        $employee->company_id = $validated['company_id'];
        $employee->save();

        return redirect()->route('superadmin.company.employee.index', $companyId)->with('success', 'Karyawan berhasil ditambahkan ke perusahaan.');
    }
    public function employeeDestroy($companyId, $employeeId)
    {
        $employee = Employee::where('company_id', $companyId)->where('id', $employeeId)->firstOrFail();
        $employee->company_id = null;
        $employee->save();

        return redirect()->route('superadmin.company.employee.index', $companyId)->with('success', 'Karyawan berhasil dihapus dari perusahaan.');
    }
}
