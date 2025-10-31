<?php

namespace App\Http\Controllers\API\V1\Company;

use App\Http\Controllers\Controller;
use App\Models\CompanyPlace;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PatrolSpotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($companyId)
    {
        $patrolSpots = CompanyPlace::where('company_id', $companyId)->get()->map(function ($spot) {
            return [
                'id' => (string)$spot->id,
                'title' => $spot->name,
                'address' => $spot->address,
                'latitude' => (string)$spot->latitude,
                'longitude' => (string)$spot->longitude,
            ];
        });

        return response()->json($patrolSpots);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $spot = CompanyPlace::findOrFail($id);

        return response()->json([
            'id' => (string)$spot->id,
            'title' => $spot->name,
            'address' => $spot->address,
            'latitude' => (string)$spot->latitude,
            'longitude' => (string)$spot->longitude,
            'description' => $spot->description ?? '-',
            'nfcTagUid' => $spot->nfc_tag_uid ?? '-',
        ]);
    }

    /**
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $spot = CompanyPlace::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'sometimes|string|max:255',
            'address' => 'sometimes|string',
            'description' => 'nullable|string',
            'nfcTagUid' => [
                'nullable',
                'string',
                Rule::unique('company_places', 'nfc_tag_uid')->ignore($spot->id),
            ],
        ]);

        $spot->update($validatedData);

        return response()->json([
            'status' => 'success',
            'message' => 'Patrol spot edited successfully',
            'data' => ['id' => (string)$spot->id],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function verifyNfc(Request $request, string $id)
    {
        $request->validate([
            'nfcTagUid' => 'required|string',
        ]);

        $spot = CompanyPlace::findOrFail($id);

        if ($spot->nfc_tag_uid === $request->nfcTagUid) {
            return response()->json([
                'status' => 'success',
                'message' => 'NFC Tag UID compatible with database',
                'data' => ['id' => (string)$spot->id],
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'NFC Tag UID not compatible with database',
        ], 422);
    }
}
