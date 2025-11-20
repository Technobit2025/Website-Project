<?php
namespace App\Http\Controllers\API\V1\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePatrolRequest;
use App\Services\AndroidPatrolService;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\CompanyPlace;
use App\Models\EmployeeShiftSchedule;

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

    public function history(Request $request)
    {
        $employeeId = $request->user()->employee->id;

        // Ambil history patroli dari stored procedure
        $history = DB::select('CALL get_patrol_history(?)', [$employeeId]);

        // Menambahkan URL foto di setiap hasil patroli
        foreach ($history as &$item) {
            // Pastikan foto URL bisa diakses jika ada
            $item->photo_url = $item->photo ? asset('storage/' . $item->photo) : null;
        }

        return response()->json([
            'message' => 'Berhasil mengambil data history patroli',
            'data' => $history
        ]);
    }

    public function patrolByNfc(Request $request)
    {
        $request->validate([
            'uid' => 'required_without:nfcTagUid|string',
            'nfcTagUid' => 'required_without:uid|string',
        ]);

        $nfcUid = $request->uid ?? $request->nfcTagUid;
        $user = $request->user();
        $employee = $user->employee;

        if (!$employee) {
            return response()->json([
                'status' => 'error',
                'message' => 'User is not associated with an employee data.',
            ], 403);
        }

        $place = CompanyPlace::where('nfc_tag_uid', $nfcUid)->first();

        if (!$place) {
            return response()->json([
                'status' => 'error',
                'message' => 'nfc tag tidak ada di database',
            ], 404);
        }

        // 3. Security Check: Pastikan Lokasi NFC milik Company yang sama dengan Employee
        if ($place->company_id != $employee->company_id) {
            return response()->json([
                'status' => 'error',
                'message' => 'Lokasi tidak dikenali untuk perusahaan anda.',
            ], 403);
        }

        // 4. Cek Shift Hari Ini (Ambil dari CompanySchedule)
        $today = now()->toDateString();

        $schedule = CompanySchedule::where('employee_id', $employee->id)
            ->whereDate('date', $today)
            ->first();

        if (!$schedule) {
            return response()->json([
                'status' => 'error',
                'message' => 'shift tidak sesuai',
            ], 404);
        }

        // 5. Return Data Lokasi (JSON Format disamakan dengan QR Code)
        return response()->json([
            'id' => $place->id,
            'company_id' => $place->company_id,
            'code' => $place->code,
            'name' => $place->name,
            'address' => $place->address,
            'latitude' => $place->latitude,
            'longitude' => $place->longitude,
            'description' => $place->description,
            'email' => $place->email,
            'phone' => $place->phone,
            'website' => $place->website,
            'created_at' => $place->created_at,
            'updated_at' => $place->updated_at,
        ]);
    }
}
