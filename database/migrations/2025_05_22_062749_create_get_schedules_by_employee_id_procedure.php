<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateGetSchedulesByEmployeeIdProcedure extends Migration
{
    public function up()
    {
        DB::unprepared("
            DROP PROCEDURE IF EXISTS get_schedules_by_employee_id;

            CREATE PROCEDURE get_schedules_by_employee_id(IN emp_id BIGINT)
            BEGIN
              SELECT 
                cs.id AS schedule_id,
                cs.name AS shift_name,
                TIME_FORMAT(cs.start_time, '%H:%i') AS start_time,
                TIME_FORMAT(cs.end_time, '%H:%i') AS end_time,
                cs.late_time AS late_time,
                cs.checkout_time AS checkout_time,
                cs.color AS shift_color,
                cs.description AS shift_description
              FROM company_shifts cs
              JOIN permits p ON cs.id = p.employee_schedule_id
              WHERE p.employee_id = emp_id;
            END
        ");
    }

    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS get_schedules_by_employee_id;");
    }
}
