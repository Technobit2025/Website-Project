<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      DB::unprepared("
  
CREATE PROCEDURE GetCompanyLocationByEmployeeId(IN emp_id BIGINT)
BEGIN
    SELECT cp.latitude, cp.longitude
    FROM employees e
    JOIN company_places cp ON cp.company_id = e.company_id
    WHERE e.id = emp_id
    LIMIT 1;
END
");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    DB::unprepared("DROP PROCEDURE IF EXISTS GetCompanyLocationByEmployeeId");
    }
};
