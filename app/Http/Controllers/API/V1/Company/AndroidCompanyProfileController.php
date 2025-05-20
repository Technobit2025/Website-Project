<?php

namespace App\Http\Controllers\Api\V1\Company;

use App\Http\Controllers\Controller;
use App\Services\AndroidCompanyProfileService;
use Illuminate\Http\Request;

class AndroidCompanyProfileController extends Controller
{
    protected $companyProfileService;

    public function __construct(AndroidCompanyProfileService $companyProfileService)
    {
        $this->companyProfileService = $companyProfileService;
    }

    /**
     * Menampilkan informasi detail profil perusahaan.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request)
    {
        $companyProfile = $this->companyProfileService->getCompanyProfile();

        if (!$companyProfile) {
            return response()->json(['message' => 'Company profile not found'], 404);
        }

        return response()->json($companyProfile);
    }
}
