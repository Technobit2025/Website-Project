<?php
namespace App\Http\Controllers\API\V1\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePatrolRequest;
use App\Services\AndroidPatrolService;

class AndroidPatrolController extends Controller
{
    protected $service;

    public function __construct(AndroidPatrolService $service)
    {
        $this->middleware('auth:sanctum');
        $this->service = $service;
    }

    public function store(StorePatrolRequest $request)
    {
        $patrol = $this->service->store($request->validated());

        return response()->json([
            'message' => 'Patroli berhasil disubmit',
            'data'    => $patrol
        ], 201);
    }

    public function index()
    {
        $patrols = $this->service->getMyPatrols();

        return response()->json($patrols);
    }
}
