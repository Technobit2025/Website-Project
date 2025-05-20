<?php

namespace App\Services;

use App\Models\CompanyPlace;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

        // Ambil company_place berdasarkan company_id
        $companyPlace = CompanyPlace::where('company_id', $employee->company_id)->first();

        if (!$companyPlace) {
            return null;
        }

        return [
            'logo' => $this->getLogoUrl($companyPlace),
            'name' => $companyPlace->name,
            'description' => $companyPlace->description,
            'email' => 'info@arunika.co.id', // Hardcoded atau ambil dari table lain jika ada
            'phone' => '+62 812 1234 5678',   // Sama seperti di atas
            'location' => $companyPlace->address,
            'website' => 'https://www.arunika.co.id'
        ];
    }

    protected function getLogoUrl($companyPlace)
    {
        // Anggap nama file logonya disimpan di field code (atau ubah sesuai field yang tepat)
        $filename = $companyPlace->code . '.png';

        if (Storage::disk('public')->exists("company/logo/{$filename}")) {
            return asset("storage/company/logo/{$filename}");
        }

        // Default logo jika tidak ada
        return asset('storage/company/logo/default.png');
    }
}
