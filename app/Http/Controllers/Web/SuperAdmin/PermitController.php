<?php

namespace App\Http\Controllers\Web\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\CompanySchedule;
use Illuminate\Http\Request;
use App\Models\Permit;

class PermitController extends Controller
{
    public function index()
    {
        $permits = Permit::with([
            'employee:id,fullname',
            'alternate:id,fullname',
            'employeeCompanySchedule',
            'alternateCompanySchedule',
            'employeeCompanySchedule.companyShift',
            'alternateCompanySchedule.companyShift'
        ])->orderBy('created_at', 'desc')->where('employee_is_confirmed', '=', 'approved')->where('alternate_is_confirmed', '=', 'approved')->get();

        return view('super_admin.permit.index', compact('permits',));
    }
    public function show(Permit $permit)
    {
        $permit->load([
            'employee',
            'alternate',
            'employeeCompanySchedule',
            'alternateCompanySchedule',
            'employeeCompanySchedule.companyShift',
            'alternateCompanySchedule.companyShift'
        ]);

        return view('super_admin.permit.show', compact('permit'));
    }
    public function confirm(Permit $permit, Request $request)
    {
        $validated = $request->validate([
            'value' => 'required|in:rejected,approved'
        ]);

        if ($validated['value'] === 'approved') {
            // Simpan jadwal lama
            $permitEmployeeScheduleId = $permit->employee_schedule_id;
            $permitAlternateScheduleId = $permit->alternate_schedule_id;

            $employeeSchedule = CompanySchedule::find($permitEmployeeScheduleId);
            $alternateSchedule = CompanySchedule::find($permitAlternateScheduleId);

            if ($employeeSchedule && $alternateSchedule) {
                // Tukar jadwal antara karyawan dan pengganti
                $tempEmployeeId = $employeeSchedule->employee_id;
                $employeeSchedule->employee_id = $alternateSchedule->employee_id;
                $alternateSchedule->employee_id = $tempEmployeeId;

                $employeeSchedule->save();
                $alternateSchedule->save();
            }
        }

        $permit->status = $validated['value'];
        $permit->save();

        $message = $validated['value'] === 'approved' ? 'Izin berhasil disetujui dan jadwal ditukar.' : 'Izin berhasil ditolak.';
        return redirect()->route('superadmin.permit.show', $permit->id)->with('success', $message);
    }
}
