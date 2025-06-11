<?php

namespace App\Http\Controllers\Web\Danru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patrol;
use Barryvdh\DomPDF\Facade\Pdf;

class PatrolController extends Controller
{
    //
    public function index()
    {
        $companyId = auth()->user()->employee->company_id;

        $patrols = Patrol::whereHas('employee', function ($query) use ($companyId) {
            $query->where('company_id', $companyId);
        })->get();

        
        // $patrols = Patrol::all();
        return view('danru.patrol.index',compact('patrols'));
    }
    public function exportPdf()
    {
        $companyId = auth()->user()->employee->company_id;
        // dd($companyId);

        $patrols = Patrol::whereHas('place', function ($query) use ($companyId) {
            $query->where('company_id', $companyId);
         })->get();
        // dd($patrols);
        $pdf = Pdf::setOptions(['isRemoteEnabled' => true])
        ->loadview('danru.patrol.export-pdf',compact('patrols'))
        ->setPaper('a4','landscape');

        return $pdf->stream("data-patroli.pdf",['Attachment'=>0]);
        exit();
    }
}
