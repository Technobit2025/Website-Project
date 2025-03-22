<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $employees = [
            ['name' => 'HR', 'role_id' => 2],
            ['name' => 'Employee', 'role_id' => 3],
            ['name' => 'Security', 'role_id' => 4],
            ['name' => 'Bendahara', 'role_id' => 5],
            ['name' => 'Company', 'role_id' => 6],
        ];

        foreach ($employees as $employee) {
            $user = User::create([
                'name' => $employee['name'],
                'username' => strtolower($employee['name']),
                'email' => strtolower($employee['name']) . '@gmail.com',
                'password' => strtolower($employee['name']),
                'role_id' => $employee['role_id'],
            ]);

            Employee::create([
                'user_id' => $user->id,
                'fullname' => $employee['name'],
                'nickname' => strtolower($employee['name']),
                'phone' => $faker->phoneNumber,
                'emergency_contact' => $faker->name,
                'emergency_phone' => $faker->phoneNumber,
                'gender' => $faker->randomElement(['male', 'female']),
                'birth_date' => $faker->date(),
                'birth_place' => $faker->city,
                'marital_status' => $faker->randomElement(['single', 'married', 'divorced']),
                'nationality' => 'Indonesia',
                'religion' => $faker->randomElement(['Islam', 'Christianity', 'Hinduism', 'Buddhism', 'Other']),
                'blood_type' => $faker->randomElement(['A', 'B', 'AB', 'O']),
                'id_number' => $faker->unique()->numerify('##########'),
                'tax_number' => $faker->numerify('##########'),
                'social_security_number' => $faker->numerify('##########'),
                'health_insurance_number' => $faker->numerify('##########'),
                'address' => $faker->address,
                'city' => $faker->city,
                'province' => $faker->state,
                'postal_code' => $faker->postcode,
                'department' => $faker->randomElement(['HR', 'Finance', 'IT', 'Marketing']),
                'position' => $faker->jobTitle,
                'employment_status' => $faker->randomElement(['permanent', 'contract', 'internship', 'freelance']),
                'hire_date' => $faker->date(),
                'contract_end_date' => $faker->optional()->date(),
                'salary' => $faker->randomFloat(2, 3000000, 10000000),
                'bank_name' => $faker->randomElement(['BCA', 'Mandiri', 'BNI', 'BRI']),
                'bank_account_number' => $faker->bankAccountNumber,
                'active' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
