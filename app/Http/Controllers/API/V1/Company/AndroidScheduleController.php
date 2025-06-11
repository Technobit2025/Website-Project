<?php
namespace App\Http\Controllers\API\V1\Company;

use App\Http\Controllers\Controller;
use App\Services\AndroidScheduleService;
use Illuminate\Http\Request;

class AndroidScheduleController extends Controller
{
    protected AndroidScheduleService $androidScheduleService;

    public function __construct(AndroidScheduleService $androidScheduleService)
    {
        $this->androidScheduleService = $androidScheduleService;
    }

    public function index(Request $request)
    {
        $companyId = auth()->user()->employee->company_id;
        $employeeId = auth()->user()->employee->id;
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $schedules = $this->androidScheduleService->getFilteredSchedules(
            $companyId,
            $employeeId,
            $startDate,
            $endDate
        );

        return response()->json([
            'success' => true,
            'data' => $schedules
        ]);
    }
}
