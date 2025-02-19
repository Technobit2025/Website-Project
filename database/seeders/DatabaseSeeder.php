<?php

namespace Database\Seeders;

use App\Models\User;
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
            User::firstOrCreate($user);
        }

        $this->call(DummySeeder::class);
    }
}
