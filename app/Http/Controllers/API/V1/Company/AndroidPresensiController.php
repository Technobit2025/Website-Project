<?php
namespace App\Http\Controllers\API\V1\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Services\PresensiService;
use App\DTO\PresensiData;
use App\Services\AndroidPresensiService;

class AndroidPresensiController extends Controller
{
    public function store(Request $request, AndroidPresensiService $service)
    {
        $validated = $request->validate([
            'status'           => ['required', 'string', Rule::in(['Present', 'WFH', 'Sick Leave', 'Leave', 'Late', 'Leave Early'])],
                'photo_data'       => ['nullable', 'string', Rule::requiredIf($request->status !== 'Leave Early')],
                'filename'         => ['nullable', 'string', Rule::requiredIf($request->status !== 'Leave Early')],
            'company_place_id' => ['nullable', 'integer'],
            'latitude'         => ['nullable', 'numeric'],
            'longitude'        => ['nullable', 'numeric'],
            'note'             => ['nullable', 'string'],
        ]);

        $presensi = $service->handle(new PresensiData($validated), true);

        if ($presensi->checked_out_at) {
            return response()->json([
                'message' => 'Clock-out berhasil',
                'data'    => $presensi
            ], 200);
        }

        return response()->json([
            'message' => 'Clock-in berhasil',
            'data'    => $presensi
        ], 200);
    }
}
