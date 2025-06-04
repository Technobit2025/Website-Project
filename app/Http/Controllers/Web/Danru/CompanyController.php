<?php

namespace App\Http\Controllers\Web\Danru;

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
        $companyId = auth()->user()->employee->company_id;
        $company = Company::where('id', $companyId)->first();
        // dd($company);
        return view('danru.company.index', compact('company'));
    }

    public function show(Company $company)
    {
        return view('danru.company.show', compact('company'));
    }
}
