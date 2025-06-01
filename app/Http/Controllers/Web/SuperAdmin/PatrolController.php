<?php

namespace App\Http\Controllers\Web\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patrol;
use Barryvdh\DomPDF\Facade\Pdf;

class PatrolController extends Controller
{
    //
    public function index()
    {
        $patrols = Patrol::all();
        return view('super_admin.patrol.index',compact('patrols'));
    }
    public function exportPdf()
    {
        $patrols = Patrol::all();
      
        $pdf = Pdf::setOptions(['isRemoteEnabled' => true])
        ->loadview('super_admin.patrol.export-pdf',compact('patrols'))
        ->setPaper('a4','landscape');

        return $pdf->stream("data-patroli.pdf",['Attachment'=>0]);
        exit();
    }
}
