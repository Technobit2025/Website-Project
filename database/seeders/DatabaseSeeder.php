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

        User::firstOrCreate([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'username' => 'superadmin',
            'password' => 'superadmin',
            'role_id' => 1,
        ]);
    }
}
