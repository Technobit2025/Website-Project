<?php

namespace App\Services;

use App\Models\Patrol;
use Illuminate\Support\Facades\Auth;

class AndroidPatrolService
{
    public function store(array $data): Patrol
    {
        return Patrol::create([
            'employee_id'      => Auth::id(),
            'shift_id'         => $data['shift_id'],
            'place_id'         => $data['place_id'],
            'patrol_location'  => 'Auto from QR', // Simulasi data QR
            'status'           => 'pending',
            'catatan'          => $data['catatan'] ?? null,
        ]);
    }

    public function getMyPatrols()
    {
        return Patrol::with(['place', 'shift'])
            ->where('employee_id', Auth::id())
            ->latest()
            ->get();
    }
}
