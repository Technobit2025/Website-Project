<?php

namespace App\Http\Controllers\Web\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of company.
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->role_id != 6) {
            abort(403);
        }
        $company = Company::findOrFail($user->employee->company_id);
        return view('company.index', compact('company'));
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
        return redirect()->route('company.home')->with('success', 'Perusahaan berhasil diupdate.');
    }

    public function employeeIndex()
    {
        $user = Auth::user();
        $company = Company::findOrFail($user->employee->company_id);
        $employees = Employee::where('company_id', $company->id)->get();
        return view('company.employee.index', compact('company', 'employees'));
    }

    // public function employeeStore($companyId, Request $request)
    // {
    //     $validated = $request->validate([
    //         'company_id' => 'required|exists:companies,id',
    //         'employee_id' => 'required|exists:employees,id',
    //     ], [
    //         'company_id.required' => 'ID perusahaan harus diisi.',
    //         'company_id.exists' => 'ID perusahaan tidak valid.',
    //         'employee_id.required' => 'ID karyawan harus diisi.',
    //         'employee_id.exists' => 'ID karyawan tidak valid.',
    //     ]);

    //     $employee = Employee::find($request->employee_id);
    //     $employee->company_id = $validated['company_id'];
    //     $employee->save();

    //     return redirect()->route('company.company.employee.index', $companyId)->with('success', 'Karyawan berhasil ditambahkan ke perusahaan.');
    // }
    public function employeeDestroy($companyId, $employeeId)
    {
        $employee = Employee::where('company_id', $companyId)->where('id', $employeeId)->firstOrFail();
        $employee->company_id = null;
        $employee->save();

        return redirect()->route('company.employee.index', $companyId)->with('success', 'Karyawan berhasil dihapus dari perusahaan.');
    }
}
