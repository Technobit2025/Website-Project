<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class PatrolSeed extends Seeder
{
    public function run(): void
    {
        // Buat 2 user dummy
        DB::table('users')->insert([
            [
                'name' => 'Andi Setiawan',
                'email' => 'andi@example.com',
                'username' => 'andi', // Tambahkan username
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Budi Santoso',
                'email' => 'budi@example.com',
                'username' => 'budi', // Tambahkan username
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
        

        // Tambah shift
        DB::table('company_shifts')->insert([
            [
                'company_id' => 1,
                'name' => 'Shift Pagi',
                'start_time' => '08:00:00',
                'end_time' => '16:00:00',
                'color' => '#FFEB3B',
                'description' => 'Shift pagi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 1,
                'name' => 'Shift Malam',
                'start_time' => '20:00:00',
                'end_time' => '04:00:00',
                'color' => '#3F51B5',
                'description' => 'Shift malam',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // Tambah dua pegawai
        DB::table('employees')->insert([
            [
                'user_id' => 1,
                'fullname' => 'Andi Setiawan',
                'gender' => 'male',
                'birth_date' => '1995-01-01',
                'id_number' => '1234567890123456',
                'employment_status' => 'permanent',
                'hire_date' => '2022-01-01',
                'company_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'fullname' => 'Budi Santoso',
                'gender' => 'male',
                'birth_date' => '1990-01-01',
                'id_number' => '1234567890987654',
                'employment_status' => 'contract',
                'hire_date' => '2023-01-01',
                'company_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        // Tambah jadwal patroli
        DB::table('employee_shift_schedules')->insert([
            [
                'employee_id' => 1, // Andi
                'partner_employee_id' => 2, // Budi
                'company_shift_id' => 1, // Shift Pagi
                'duty_date' => Carbon::now()->format('Y-m-d'),
                'location' => 'Pos Utama',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'employee_id' => 2, // Budi
                'partner_employee_id' => 1, // Andi
                'company_shift_id' => 2, // Shift Malam
                'duty_date' => Carbon::now()->addDay()->format('Y-m-d'),
                'location' => 'Gudang Belakang',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
