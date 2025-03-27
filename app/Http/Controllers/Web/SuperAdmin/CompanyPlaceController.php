<?php

namespace App\Http\Controllers\Web\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CompanyPlace;

class CompanyPlaceController extends Controller
{
    public function index(Company $company)
    {
        $companyPlaces = CompanyPlace::where('company_id', $company->id)->get();
        return view('super_admin.company.place.index', compact('companyPlaces', 'company'));
    }

    public function create(Company $company)
    {
        return view('super_admin.company.place.create', compact('company'));
    }
    public function store(Request $request, Company $company)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'description' => 'nullable|string',
        ], [
            'name.required' => 'Nama lokasi harus diisi.',
            'address.required' => 'Alamat harus diisi.',
            'latitude.required' => 'Latitude harus diisi.',
            'longitude.required' => 'Longitude harus diisi.',
            'description.nullable' => 'Deskripsi boleh diisi.',
        ]);
        $validated['company_id'] = $company->id;
        $validated['code'] = bcrypt(str()->random(10));

        CompanyPlace::create($validated);

        return redirect()->route('superadmin.company.place.index', $company->id)->with('success', 'Lokasi berhasil ditambahkan.');
    }

    public function show($id)
    {
        $companyPlace = CompanyPlace::findOrFail($id);
        return view('super_admin.company.place.show', compact('companyPlace'));
    }

    public function edit($id)
    {
        $companyPlace = CompanyPlace::findOrFail($id);
        return view('super_admin.company.place.edit', compact('companyPlace'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'description' => 'nullable|string',
        ], [
            'name.required' => 'Nama lokasi harus diisi.',
            'address.required' => 'Alamat harus diisi.',
            'latitude.required' => 'Latitude harus diisi.',
            'longitude.required' => 'Longitude harus diisi.',
            'description.nullable' => 'Deskripsi boleh diisi.',
        ]);

        $companyPlace = CompanyPlace::findOrFail($id);
        $companyPlace->update($request->all());

        return redirect()->route('superadmin.company.place.index', $companyPlace->company_id)->with('success', 'Lokasi berhasil diubah.');
    }

    public function destroy($id)
    {
        $companyPlace = CompanyPlace::findOrFail($id);
        $companyPlace->delete();

        return redirect()->route('superadmin.company.place.index', $companyPlace->company_id)->with('success', 'Lokasi berhasil dihapus.');
    }

    public function printQrCode(CompanyPlace $companyPlace)
    {
        $qr = generateQrCode($companyPlace->code, 200);
        return view('super_admin.company.place.print_qr_code', compact('companyPlace', 'qr'));
    }
}
