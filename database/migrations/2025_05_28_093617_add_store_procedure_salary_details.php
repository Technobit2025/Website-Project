<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::unprepared(<<<SQL
        DROP PROCEDURE IF EXISTS get_salary_detail;
        CREATE PROCEDURE get_salary_detail(IN empId BIGINT, IN perId BIGINT)
        BEGIN
            SELECT 
                pp.id AS period_id,
                pp.name AS period_name,
                pp.start_date,
                pp.end_date,
                p.status,
                SUM(CASE WHEN pc.type = 'basic' THEN pc.amount ELSE 0 END) AS gaji_pokok,
                SUM(CASE WHEN pc.type = 'allowance' THEN pc.amount ELSE 0 END) AS tunjangan,
                SUM(CASE WHEN pc.type = 'bonus' THEN pc.amount ELSE 0 END) AS bonus,
                SUM(CASE WHEN pc.type = 'tax' AND pc.amount > 0 THEN pc.amount ELSE 0 END) AS pajak,
                SUM(CASE WHEN pc.type = 'tax' AND pc.amount < 0 THEN ABS(pc.amount) ELSE 0 END) AS insentif_pajak,
                
                -- Total gaji dihitung langsung (bukan dari p.total)
                (
                    SUM(CASE WHEN pc.type = 'basic' THEN pc.amount ELSE 0 END) +
                    SUM(CASE WHEN pc.type = 'allowance' THEN pc.amount ELSE 0 END) +
                    SUM(CASE WHEN pc.type = 'bonus' THEN pc.amount ELSE 0 END) -
                    SUM(CASE WHEN pc.type = 'tax' AND pc.amount > 0 THEN pc.amount ELSE 0 END) +
                    SUM(CASE WHEN pc.type = 'tax' AND pc.amount < 0 THEN ABS(pc.amount) ELSE 0 END)
                ) AS total_gaji
            FROM payrolls p
            JOIN payroll_periods pp ON p.payroll_period_id = pp.id
            JOIN payroll_components pc ON pc.payroll_id = p.id
            WHERE p.employee_id = empId AND p.payroll_period_id = perId
            GROUP BY pp.id, pp.name, pp.start_date, pp.end_date, p.status;
        END;
        SQL);
    }

    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS get_salary_detail');
    }
};
