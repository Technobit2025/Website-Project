<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        $users = [
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@gmail.com',
                'username' => 'superadmin',
                'password' => 'superadmin',
                'role_id' => 1,
            ],
            [
                'name' => 'Human Resource',
                'email' => 'hr@gmail.com',
                'username' => 'humanresource',
                'password' => 'hr',
                'role_id' => 2,
            ],
        ];

        foreach ($users as $user) {
            $user = User::firstOrCreate($user);

            if ($user->id == 2) {
                Employee::create([
                    'user_id' => $user->id,
                    'fullname' => 'Human Resource',
                    'nickname' => 'hr',
                    'phone' => '081234567890',
                    'emergency_contact' => 'Human Resource',
                    'emergency_phone' => '081234567890',
                    'gender' => 'male',
                    'birth_date' => '1990-01-01',
                    'birth_place' => 'Jakarta',
                    'marital_status' => 'single',
                    'nationality' => 'Indonesia',
                    'religion' => 'Islam',
                    'blood_type' => 'A',
                    'id_number' => '1234567890',
                    'tax_number' => '1234567890',
                    'social_security_number' => '1234567890',
                    'health_insurance_number' => '1234567890',
                    'address' => 'Jl. Raya No. 1',
                    'city' => 'Jakarta',
                    'province' => 'DKI Jakarta',
                    'postal_code' => '12345',
                    'department' => 'HR',
                    'position' => 'HR Manager',
                    'employment_status' => 'permanent',
                    'hire_date' => '2021-01-01',
                    'contract_end_date' => '2021-01-01',
                    'salary' => '10000000',
                    'bank_name' => 'BCA',
                    'bank_account_number' => '1234567890',
                    'active' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        $this->call(DummySeeder::class);
    }
}
