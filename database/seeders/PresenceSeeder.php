<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Presence;

class PresenceSeeder extends Seeder
{
    public function run()
    {
        Presence::create([
            'employee_id' => 3,
            'check_in_time' => '2025-04-25 08:00:00',
            'check_out_time' => '2025-04-25 16:00:00',
            'location' => 'Office',
            'notes' => 'Test shift',
        ]);
    }
}

