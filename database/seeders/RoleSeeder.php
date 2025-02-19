<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'Super Admin', 'code' => 'super_admin'],
            ['name' => 'Human Resource', 'code' => 'human_resource'],
            ['name' => 'Employee', 'code' => 'employee'],
            ['name' => 'Security', 'code' => 'security'],
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate(['code' => $role['code']], $role);
        }
    }
}
