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
            DROP PROCEDURE IF EXISTS get_patrol_history;
            
            CREATE PROCEDURE get_patrol_history(IN employee_id INT)
            BEGIN
                SELECT
                    p.id,
                    p.shift_id,
                    p.place_id,
                    p.patrol_location,
                    p.kondisi,
                    p.catatan,
                    p.photo,
                    p.created_at,
                    p.updated_at
                FROM patrols p
                WHERE p.employee_id = employee_id
                ORDER BY p.created_at DESC;
            END
        ");
    }

    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS get_patrol_history;");
    }
};