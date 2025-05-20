<?php
namespace App\Http\Controllers\API\V1\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePatrolRequest;
use App\Services\AndroidPatrolService;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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


}
