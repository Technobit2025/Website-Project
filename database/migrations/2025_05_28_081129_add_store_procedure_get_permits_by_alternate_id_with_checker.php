<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    public function up(): void
    {
        DB::unprepared("
        DROP PROCEDURE IF EXISTS get_permits_for_alternate_employee;

        CREATE PROCEDURE get_permits_for_alternate_employee(IN emp_id INT)
        BEGIN
            SELECT 
                p.id,
                p.employee_id,
                p.alternate_id,
                p.employee_schedule_id,
                p.date,
                p.reason,
                p.status,
                p.employee_is_confirmed,
                p.alternate_is_confirmed,
                e.fullname AS requester_name
            FROM 
                permits p
            JOIN employees e ON p.employee_id = e.id
            WHERE 
                p.alternate_id = emp_id
                AND p.status = 'approved';
        END
    ");
    }

    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS get_permits_for_alternate_employee;");
    }
};
