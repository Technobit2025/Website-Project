<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateGetUserPermitsByEmployeeIdSp extends Migration
{
    public function up(): void
    {
        DB::unprepared("
            DROP PROCEDURE IF EXISTS get_user_permits_by_employee_id;
            
            CREATE PROCEDURE get_user_permits_by_employee_id(IN emp_id BIGINT)
            BEGIN
                SELECT * FROM permits WHERE employee_id = emp_id;
            END
        ");
    }

    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS get_user_permits_by_employee_id;");
    }
}
