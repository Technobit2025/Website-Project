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
        $companies = Company::all();
        return view('danru.company.index', compact('companies'));
    }

    public function show(Company $company)
    {
        return view('danru.company.show', compact('company'));
    }
}
