<?php

namespace App\Http\Controllers\API\V1\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AndroidPermitsService;

class AndroidPermitsController extends Controller
{
    protected $permitService;

    public function __construct(AndroidPermitsService $permitService)
    {
        $this->permitService = $permitService;
    }

    public function index()
    {
        $user = auth()->user();
        $result = $this->permitService->getPermitsByUser($user->id);

        return response()->json($result);
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $result = $this->permitService->createPermit($request->all(), $user->id);

        return response()->json([
            'success' => true,
            'data' => $result
        ]);
    }

    public function destroy(Request $request)
    {
        $user = auth()->user();
        $permit_id = $request->id;

        $result = $this->permitService->deletePermit($permit_id, $user->id);

        return response()->json($result);
    }
}
