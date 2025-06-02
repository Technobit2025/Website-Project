<?php

namespace App\Http\Controllers\Web\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyPlace;
use Illuminate\Support\Facades\Auth;

class CompanyPlaceController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->role_id != 6) {
            abort(403);
        }
        $company = Company::findOrFail($user->employee->company_id);
        $companyPlaces = CompanyPlace::where('company_id', $company->id)->get();
        return view('company.place.index', compact('companyPlaces', 'company'));
    }

    public function create()
    {
        $user = Auth::user();
        if ($user->role_id != 6) {
            abort(403);
        }
        $company = Company::findOrFail($user->employee->company_id);
        return view('company.place.create', compact('company'));
    }
    public function store(Request $request)
    {
        $user = Auth::user();
        if ($user->role_id != 6) {
            abort(403);
        }
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'description' => 'nullable|string',
        ]);
        $validated['company_id'] = $user->employee->company_id;
        $validated['code'] = bcrypt(str()->random(10));

        CompanyPlace::create($validated);

        return redirect()->route('company.place.index')->with('success', 'Lokasi berhasil ditambahkan.');
    }

    public function show($id)
    {
        $user = Auth::user();
        if ($user->role_id != 6) {
            abort(403);
        }
        $companyPlace = CompanyPlace::findOrFail($id);
        return view('company.place.show', compact('companyPlace'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        if ($user->role_id != 6) {
            abort(403);
        }
        $companyPlace = CompanyPlace::findOrFail($id);
        return view('company.place.edit', compact('companyPlace'));
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        if ($user->role_id != 6) {
            abort(403);
        }
        $request->validate([
            'company_id' => 'required|exists:companies,id',
            'code' => 'required|unique:company_places,code,' . $id,
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $companyPlace = CompanyPlace::findOrFail($id);
        $companyPlace->update($request->all());

        return redirect()->route('company.place.index')->with('success', 'Company place updated successfully.');
    }

    public function destroy($id)
    {
        $user = Auth::user();
        if ($user->role_id != 6) {
            abort(403);
        }
        $companyPlace = CompanyPlace::findOrFail($id);
        $companyPlace->delete();

        return redirect()->route('company.place.index')->with('success', 'Company place deleted successfully.');
    }
}
