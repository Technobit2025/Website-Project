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
                'name' => 'Company',
                'email' => 'company@gmail.com',
                'username' => 'company',
                'password' => 'company',
                'role_id' => 6,
            ]
        ];

        foreach ($users as $user) {
            $user = User::firstOrCreate($user);
        }

        $this->call(DummySeeder::class);
        $this->call(PatrolSeed::class);
    }
}
