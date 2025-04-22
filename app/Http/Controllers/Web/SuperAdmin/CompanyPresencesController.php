<?php

namespace App\Http\Controllers\Web\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CompanyPresence;
class CompanyPresencesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Company $company)
    {
        //
        // $companies = Company::all();
        $companyPresence = CompanyPresence::where('company_id', $company->id)->get();
        return view('super_admin.company.presence.index', compact('companyPresence','company'));
    }
   

    /**
     * Show the form for creating a new resource.
     */
    public function create(Company $company)
    {
        //
        // $company = Company::findOrFail($companyId);
        return view('super_admin.company.presence.create', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Company $company)
    {
        
        $request->validate([
            'information' => 'required',
            'day' => 'required',
            'start-time' => 'required',
            'start-end' => 'required'
        ]);

        $data = [
            'information' => $request->input('information'),
            'day' => $request->input('day'),
            'start_time' => $request->input('start-time'),
            'start_end' => $request->input('start-end')
        ];
        $data['company_id'] = $company->id;
        CompanyPresence::create($data);
        return redirect()->route('superadmin.company.presence.index', $company->id)->with('success', 'Jadwal berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $companyPresence = CompanyPresence::findOrFail($id);
        return view('super_admin.company.presence.edit', compact('companyPresence'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompanyPresence $presence)
    {
    $request->validate([
        'information' => 'required',
        'day' => 'required',
        'start_time' => 'required',
        'start_end' => 'required',
    ]);

    $presence->update([
        'information' => $request->information,
        'day' => $request->day,
        'start_time' => $request->start_time,
        'start_end' => $request->start_end,
    ]);

    return redirect()->route('superadmin.company.presence.index', $presence->company_id)
        ->with('success', 'Jadwal berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    $companyPresence = CompanyPresence::findOrFail($id);
    $companyPresence->delete();
    return redirect()->route('superadmin.company.presence.index', $companyPresence->company_id)
        ->with('success', 'Jadwal berhasil dihapus');
    }
}
