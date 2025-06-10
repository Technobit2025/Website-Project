<?php

namespace App\Services;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class AndroidCompanyProfileService
{
    public function getCompanyProfile()
    {
        $user = Auth::user();

        // Ambil employee berdasarkan user_id
        $employee = Employee::where('user_id', $user->id)->first();

        if (!$employee || !$employee->company_id) {
            return null;
        }

        // Ambil data perusahaan dari tabel `companies`
        $company = Company::find($employee->company_id);

        if (!$company) {
            return null;
        }

        return [
            'logo' => $company->logo, // Menggunakan accessor
            'name' => $company->name,
            'description' => $company->description ?? '-',
            'email' => $company->email ?? '-',
            'phone' => $company->phone ?? '-',
            'location' => $company->location ?? '-',
            'website' => $company->website ?? '-',
        ];
    }
}