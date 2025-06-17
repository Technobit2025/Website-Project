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

        $patrols = Patrol::whereHas('employee', function ($query) use ($companyId) {
            $query->where('company_id', $companyId);
         })->get();
        // dd($patrols);
        $pdf = Pdf::setOptions(['isRemoteEnabled' => true])
        ->loadview('danru.patrol.export-pdf',compact('patrols'))
        ->setPaper('a4','landscape');

        return $pdf->stream("data-patroli.pdf",['Attachment'=>0]);
        exit();
    }
    public function edit(Patrol $patrol)
    {
        return view('danru.patrol.edit',compact('patrol'));
    }
    public function update(Request $request, Patrol $patrol)
    {
        $validated = $request->validate([
            'shift' => 'required|in:Pagi,Siang,Malam',
            'catatan' => 'nullable|string|max:255',
        ], [
            'shift.required' => 'Shift wajib dipilih.',
            'shift.in' => 'Shift tidak valid.',
            'catatan.string' => 'Catatan harus berupa teks.',
            'catatan.max' => 'Catatan tidak boleh lebih dari 255 karakter.',
        ]);

        // Ambil ID shift dari nama shift yang dipilih
        $shift = \App\Models\CompanyShift::where('name', $validated['shift'])
        ->where('company_id', $patrol->employee->company_id)
        ->first();

        if (!$shift) {
            return back()->with('error', 'Shift tidak ditemukan di database.');
        }

        $patrol->update([
            'shift_id' => $shift->id,
            'catatan' => $validated['catatan'],
        ]);

        return redirect()->route('danru.patrol.index')->with('success', 'Data patroli berhasil diperbarui.');
    }
}
