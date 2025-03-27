<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\CompanyAttendance;
use App\Models\CompanyPlace;
use App\Models\CompanySchedule;
use App\Models\CompanyShift;
use App\Models\Employee;
use App\Models\User;
use Carbon\Carbon;
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
            ['name' => 'Bendahara', 'role_id' => 5]
        ];
        $ipData = json_decode(file_get_contents("http://ip-api.com/json/"), true);
        print_r($ipData);
        $latitude = $ipData['lat'] ?? -7.9;
        $longitude = $ipData['lon'] ?? 112.6;
        $location = $ipData['city'] . ', ' . $ipData['regionName'] . ', ' . $ipData['country']; //466c70096e0a0b

        for ($i = 1; $i < 3; $i++) {
            // Company
            $company = Company::create([
                'name' => 'Company ' . $i,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'email' => 'company' . $i . '@gmail.com',
                'website' => 'https://company' . $i . '.com',
                'location' => $faker->address,
                'description' => $faker->text,
            ]);

            // Shift
            $shifts = ['Pagi', 'Sore', 'Malam'];
            foreach ($shifts as $shift) {
                $startTime = $faker->time();
                $endTime = Carbon::createFromFormat('H:i:s', $startTime)->addHours(8)->format('H:i:s');
                CompanyShift::create([
                    'company_id' => $company->id,
                    'name' => $shift,
                    'start_time' => $startTime,
                    'end_time' => $endTime,
                    'color' => $faker->hexColor,
                    'description' => $faker->text,
                ]);
            }

            // Place
            $places = ['Kantor', 'Gudang', 'Toko'];
            foreach ($places as $place) {
                CompanyPlace::create([
                    'company_id' => $company->id,
                    'name' => $place,
                    'address' => $location,
                    'latitude' => $latitude,
                    'longitude' => $longitude,
                    'description' => $faker->text,
                    'code' => bcrypt(str()->random(10)),
                ]);
            }

            // Employee
            foreach ($employees as $employee) {
                $user = User::create([
                    'name' => $employee['name'] . ' ' . $i,
                    'username' => strtolower($employee['name']) . $i,
                    'email' => strtolower($employee['name']) . $i . '@gmail.com',
                    'password' => strtolower($employee['name']),
                    'role_id' => $employee['role_id'],
                ]);

                $employee = Employee::create([
                    'user_id' => $user->id,
                    'fullname' => $employee['name'] . ' ' . $i,
                    'nickname' => strtolower($employee['name']) . $i,
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
                    'company_id' => $company->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                // Schedule
                $days = Carbon::now()->daysInMonth;
                for ($j = 1; $j < rand(1, $days); $j++) {
                    CompanySchedule::create([
                        'company_id' => $company->id,
                        'company_shift_id' => CompanyShift::inRandomOrder()->first()->id,
                        'employee_id' => $employee->id,
                        'date' => Carbon::now()->startOfMonth()->addDays($j - 1)->format('Y-m-d'),
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }

                // Attendance
                for ($k = 1; $k <= rand(1, $days); $k++) {
                    CompanyAttendance::create([
                        'employee_id' => $employee->id,
                        'company_place_id' => CompanyPlace::inRandomOrder()->first()->id,
                        'latitude' => $faker->latitude,
                        'longitude' => $faker->longitude,
                        'status' => $faker->randomElement(['Present', 'Sick Leave', 'Leave', 'Absent', 'Late', 'Left Early', 'WFH']),
                        'note' => $faker->text,
                        'checked_in_at' => $faker->dateTimeThisMonth(),
                        'checked_out_at' => $faker->dateTimeThisMonth(),
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
