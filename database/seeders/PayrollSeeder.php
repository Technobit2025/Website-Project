<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PayrollComponent;
use App\Models\PayrollPeriod;
use App\Models\Payroll;
use Carbon\Carbon;

class PayrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed payroll_periods
        $payrollPeriods = [
            [
                'id' => 1,
                'name' => 'Januari 2025',
                'start_date' => '2025-01-01',
                'end_date' => '2025-01-31',
                'is_locked' => 0,
                'created_at' => '2025-05-28 10:17:31',
                'updated_at' => '2025-05-28 10:17:31',
            ],
            [
                'id' => 2,
                'name' => 'Desember 2024',
                'start_date' => '2024-12-01',
                'end_date' => '2024-12-31',
                'is_locked' => 0,
                'created_at' => '2025-05-28 10:17:31',
                'updated_at' => '2025-05-28 10:17:31',
            ],
            [
                'id' => 3,
                'name' => 'November 2024',
                'start_date' => '2024-11-01',
                'end_date' => '2024-11-30',
                'is_locked' => 0,
                'created_at' => '2025-05-28 10:17:31',
                'updated_at' => '2025-05-28 10:17:31',
            ],
        ];

        foreach ($payrollPeriods as $period) {
            PayrollPeriod::updateOrCreate(
                ['id' => $period['id']],
                $period
            );
        }

        // Seed payrolls
        $payrolls = [
            [
                'id' => 1,
                'employee_id' => 1,
                'payroll_period_id' => 1,
                'total' => 3000000,
                'status' => 'paid',
                'description' => 'Gaji bulan Januari 2025',
                'created_at' => '2025-05-28 10:17:48',
                'updated_at' => '2025-05-28 10:17:48',
            ],
            [
                'id' => 2,
                'employee_id' => 8,
                'payroll_period_id' => 2,
                'total' => 2900000,
                'status' => 'unpaid',
                'description' => 'Gaji bulan Desember 2024',
                'created_at' => '2025-05-28 10:17:48',
                'updated_at' => '2025-05-28 10:17:48',
            ],
            [
                'id' => 3,
                'employee_id' => 3,
                'payroll_period_id' => 1,
                'total' => 3200000,
                'status' => 'paid',
                'description' => 'Gaji bulan Januari 2025',
                'created_at' => '2025-05-28 10:17:48',
                'updated_at' => '2025-05-28 10:17:48',
            ],
        ];

        foreach ($payrolls as $payroll) {
            Payroll::updateOrCreate(
                ['id' => $payroll['id']],
                $payroll
            );
        }

        // Seed payroll_components
        $payrollComponents = [
            [
                'id' => 1,
                'name' => 'Gaji Pokok',
                'payroll_id' => 1,
                'type' => 'basic',
                'amount' => 4000000,
                'description' => 'Gaji pokok bulan Januari 2025',
                'created_at' => '2025-05-28 10:17:58',
                'updated_at' => '2025-05-28 10:17:58',
            ],
            [
                'id' => 2,
                'name' => 'Tunjangan',
                'payroll_id' => 1,
                'type' => 'allowance',
                'amount' => 1000000,
                'description' => 'Tunjangan bulan Januari 2025',
                'created_at' => '2025-05-28 10:17:58',
                'updated_at' => '2025-05-28 10:17:58',
            ],
            [
                'id' => 3,
                'name' => 'Bonus',
                'payroll_id' => 1,
                'type' => 'bonus',
                'amount' => 500000,
                'description' => 'Bonus bulan Januari 2025',
                'created_at' => '2025-05-28 10:17:58',
                'updated_at' => '2025-05-28 10:17:58',
            ],
            [
                'id' => 4,
                'name' => 'Pajak',
                'payroll_id' => 1,
                'type' => 'tax',
                'amount' => 700000,
                'description' => 'Pajak bulan Januari 2025',
                'created_at' => '2025-05-28 10:17:58',
                'updated_at' => '2025-05-28 10:17:58',
            ],
            [
                'id' => 5,
                'name' => 'Insentif Pajak',
                'payroll_id' => 1,
                'type' => 'tax',
                'amount' => 700000,
                'description' => 'Insentif pajak bulan Januari 2025',
                'created_at' => '2025-05-28 10:17:58',
                'updated_at' => '2025-05-28 10:17:58',
            ],
            [
                'id' => 6,
                'name' => 'Gaji Pokok',
                'payroll_id' => 2,
                'type' => 'basic',
                'amount' => 4000000,
                'description' => 'Gaji pokok bulan Desember 2024',
                'created_at' => '2025-05-28 10:17:58',
                'updated_at' => '2025-05-28 10:17:58',
            ],
            [
                'id' => 7,
                'name' => 'Tunjangan',
                'payroll_id' => 2,
                'type' => 'allowance',
                'amount' => 1000000,
                'description' => 'Tunjangan bulan Desember 2024',
                'created_at' => '2025-05-28 10:17:58',
                'updated_at' => '2025-05-28 10:17:58',
            ],
            [
                'id' => 8,
                'name' => 'Bonus',
                'payroll_id' => 2,
                'type' => 'bonus',
                'amount' => 500000,
                'description' => 'Bonus bulan Desember 2024',
                'created_at' => '2025-05-28 10:17:58',
                'updated_at' => '2025-05-28 10:17:58',
            ],
            [
                'id' => 9,
                'name' => 'Pajak',
                'payroll_id' => 2,
                'type' => 'tax',
                'amount' => 700000,
                'description' => 'Pajak bulan Desember 2024',
                'created_at' => '2025-05-28 10:17:58',
                'updated_at' => '2025-05-28 10:17:58',
            ],
            [
                'id' => 10,
                'name' => 'Insentif Pajak',
                'payroll_id' => 2,
                'type' => 'tax',
                'amount' => 700000,
                'description' => 'Insentif pajak bulan Desember 2024',
                'created_at' => '2025-05-28 10:17:58',
                'updated_at' => '2025-05-28 10:17:58',
            ],
            [
                'id' => 11,
                'name' => 'Gaji Pokok',
                'payroll_id' => 3,
                'type' => 'basic',
                'amount' => 4200000,
                'description' => 'Gaji pokok bulan Januari 2025 untuk karyawan 2',
                'created_at' => '2025-05-28 10:17:58',
                'updated_at' => '2025-05-28 10:17:58',
            ],
            [
                'id' => 12,
                'name' => 'Tunjangan',
                'payroll_id' => 3,
                'type' => 'allowance',
                'amount' => 1200000,
                'description' => 'Tunjangan bulan Januari 2025 untuk karyawan 2',
                'created_at' => '2025-05-28 10:17:58',
                'updated_at' => '2025-05-28 10:17:58',
            ],
            [
                'id' => 13,
                'name' => 'Bonus',
                'payroll_id' => 3,
                'type' => 'bonus',
                'amount' => 600000,
                'description' => 'Bonus bulan Januari 2025 untuk karyawan 2',
                'created_at' => '2025-05-28 10:17:58',
                'updated_at' => '2025-05-28 10:17:58',
            ],
            [
                'id' => 14,
                'name' => 'Pajak',
                'payroll_id' => 3,
                'type' => 'tax',
                'amount' => 800000,
                'description' => 'Pajak bulan Januari 2025 untuk karyawan 2',
                'created_at' => '2025-05-28 10:17:58',
                'updated_at' => '2025-05-28 10:17:58',
            ],
            [
                'id' => 15,
                'name' => 'Insentif Pajak',
                'payroll_id' => 3,
                'type' => 'tax',
                'amount' => 800000,
                'description' => 'Insentif pajak bulan Januari 2025 untuk karyawan 2',
                'created_at' => '2025-05-28 10:17:58',
                'updated_at' => '2025-05-28 10:17:58',
            ],
            [
                'id' => 16,
                'name' => 'Gaji Pokok',
                'payroll_id' => 1,
                'type' => 'basic',
                'amount' => 4000000,
                'description' => 'Gaji pokok bulan Januari 2025',
                'created_at' => '2025-05-28 10:18:09',
                'updated_at' => '2025-05-28 10:18:09',
            ],
            [
                'id' => 17,
                'name' => 'Tunjangan',
                'payroll_id' => 1,
                'type' => 'allowance',
                'amount' => 1000000,
                'description' => 'Tunjangan bulan Januari 2025',
                'created_at' => '2025-05-28 10:18:09',
                'updated_at' => '2025-05-28 10:18:09',
            ],
            [
                'id' => 18,
                'name' => 'Bonus',
                'payroll_id' => 1,
                'type' => 'bonus',
                'amount' => 500000,
                'description' => 'Bonus bulan Januari 2025',
                'created_at' => '2025-05-28 10:18:09',
                'updated_at' => '2025-05-28 10:18:09',
            ],
            [
                'id' => 19,
                'name' => 'Pajak',
                'payroll_id' => 1,
                'type' => 'tax',
                'amount' => 700000,
                'description' => 'Pajak bulan Januari 2025',
                'created_at' => '2025-05-28 10:18:09',
                'updated_at' => '2025-05-28 10:18:09',
            ],
            [
                'id' => 20,
                'name' => 'Insentif Pajak',
                'payroll_id' => 1,
                'type' => 'tax',
                'amount' => 700000,
                'description' => 'Insentif pajak bulan Januari 2025',
                'created_at' => '2025-05-28 10:18:09',
                'updated_at' => '2025-05-28 10:18:09',
            ],
            [
                'id' => 21,
                'name' => 'Gaji Pokok',
                'payroll_id' => 2,
                'type' => 'basic',
                'amount' => 4000000,
                'description' => 'Gaji pokok bulan Desember 2024',
                'created_at' => '2025-05-28 10:18:09',
                'updated_at' => '2025-05-28 10:18:09',
            ],
            [
                'id' => 22,
                'name' => 'Tunjangan',
                'payroll_id' => 2,
                'type' => 'allowance',
                'amount' => 1000000,
                'description' => 'Tunjangan bulan Desember 2024',
                'created_at' => '2025-05-28 10:18:09',
                'updated_at' => '2025-05-28 10:18:09',
            ],
            [
                'id' => 23,
                'name' => 'Bonus',
                'payroll_id' => 2,
                'type' => 'bonus',
                'amount' => 500000,
                'description' => 'Bonus bulan Desember 2024',
                'created_at' => '2025-05-28 10:18:09',
                'updated_at' => '2025-05-28 10:18:09',
            ],
            [
                'id' => 24,
                'name' => 'Pajak',
                'payroll_id' => 2,
                'type' => 'tax',
                'amount' => 700000,
                'description' => 'Pajak bulan Desember 2024',
                'created_at' => '2025-05-28 10:18:09',
                'updated_at' => '2025-05-28 10:18:09',
            ],
            [
                'id' => 25,
                'name' => 'Insentif Pajak',
                'payroll_id' => 2,
                'type' => 'tax',
                'amount' => 700000,
                'description' => 'Insentif pajak bulan Desember 2024',
                'created_at' => '2025-05-28 10:18:09',
                'updated_at' => '2025-05-28 10:18:09',
            ],
        ];

        foreach ($payrollComponents as $component) {
            PayrollComponent::updateOrCreate(
                ['id' => $component['id']],
                $component
            );
        }
    }
}