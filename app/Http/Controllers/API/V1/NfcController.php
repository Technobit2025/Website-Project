<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\CompanyPlace;
use Illuminate\Http\Request;

class NfcController extends Controller
{
    public function checkNfc(Request $request)
    {
        $request->validate([
            'nfcTagUid' => 'required|string',
        ]);

        $spot = CompanyPlace::where('nfc_tag_uid', $request->nfcTagUid)->first();

        if ($spot) {
            return response()->json([
                'status' => 'success',
                'message' => 'NFC Tag UID compatible with database',
                'data' => [
                    'id' => (string)$spot->id,
                    'title' => $spot->name,
                    'address' => $spot->address,
                    'latitude' => (string)$spot->latitude,
                    'longitude' => (string)$spot->longitude,
                    'description' => $spot->description ?? '-',
                    'nfcTagUid' => $spot->nfc_tag_uid,
                ],
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'NFC Tag UID not found in database',
        ], 404);
    }
}
