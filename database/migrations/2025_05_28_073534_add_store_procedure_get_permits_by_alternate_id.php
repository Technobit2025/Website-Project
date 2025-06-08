<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        DB::unprepared("
            DROP PROCEDURE IF EXISTS get_permits_by_alternate_id;

            CREATE PROCEDURE get_permits_by_alternate_id(IN alt_id BIGINT)
            BEGIN
                SELECT 
                    p.id,
                    p.employee_id,
                    e1.fullname AS employee_name,
                    p.alternate_id,
                    e2.fullname AS alternate_name,
                    p.employee_schedule_id,
                    CONCAT(cs1.name, ' (', TIME_FORMAT(cs1.start_time, '%H:%i'), '-', TIME_FORMAT(cs1.end_time, '%H:%i'), ')') AS details_emp_schedule,
                    p.alternate_schedule_id,
                    CONCAT(cs2.name, ' (', TIME_FORMAT(cs2.start_time, '%H:%i'), '-', TIME_FORMAT(cs2.end_time, '%H:%i'), ')') AS details_alt_schedule,
                    p.date,
                    p.permission,
                    p.employee_is_confirmed,
                    p.alternate_is_confirmed,
                    p.status,
                    p.type,
                    p.reason,
                    p.created_at
                FROM permits p
                LEFT JOIN employees e1 ON p.employee_id = e1.id
                LEFT JOIN employees e2 ON p.alternate_id = e2.id
                LEFT JOIN company_shifts cs1 ON p.employee_schedule_id = cs1.id
                LEFT JOIN company_shifts cs2 ON p.alternate_schedule_id = cs2.id
                WHERE p.alternate_id = alt_id
                ORDER BY p.created_at DESC;
            END
        ");
    }

    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS get_permits_by_alternate_id;");
    }
};