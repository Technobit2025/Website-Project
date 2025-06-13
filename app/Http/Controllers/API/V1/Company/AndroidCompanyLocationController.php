<?php

namespace App\Http\Controllers\API\V1\Company;

use App\Http\Controllers\Controller;
use App\Services\AndroidCompanyLocationService;
use Illuminate\Http\JsonResponse;

class AndroidCompanyLocationController extends Controller
{
    protected $service;

    public function __construct(AndroidCompanyLocationService $service)
    {
        $this->service = $service;
    }

    public function index(): JsonResponse
    {
        $location = $this->service->getLocationByUser();

        if (!$location) {
            return response()->json([
                'message' => 'Company location not found.',
            ], 404);
        }

        return response()->json($location);
    }
}
