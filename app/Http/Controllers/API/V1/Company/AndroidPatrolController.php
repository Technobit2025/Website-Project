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
            'nfcTagUid' => 'required|string',
        ]);

        $employee = $request->user()->employee;

        // Find the current shift for the employee
        $today = now()->toDateString();
        $schedule = EmployeeShiftSchedule::where('employee_id', $employee->id)
            ->whereDate('date', $today)
            ->first();

        if (!$schedule) {
            return response()->json([
                'status' => 'error',
                'message' => 'No shift found for today.',
            ], 404);
        }

        // Find the patrol spot with the given NFC tag that is part of the current shift
        $spot = CompanyPlace::where('nfc_tag_uid', $request->nfcTagUid)
            ->whereHas('shift', function ($query) use ($schedule) {
                $query->where('id', $schedule->company_shift_id);
            })
            ->first();

        if ($spot) {
            return response()->json([
                'status' => 'success',
                'message' => 'NFC Tag UID compatible with database',
                'data' => $spot,
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'NFC Tag UID not found for the current shift.',
        ], 404);
    }
}
