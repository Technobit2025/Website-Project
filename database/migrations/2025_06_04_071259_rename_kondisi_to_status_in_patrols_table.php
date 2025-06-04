<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Drop SP lama jika ada
        DB::unprepared('DROP PROCEDURE IF EXISTS get_patrol_history');

        // Buat SP baru dengan kolom `status`
        DB::unprepared("
            CREATE PROCEDURE get_patrol_history(IN employee_id INT)
            BEGIN
                SELECT
                    p.id,
                    p.shift_id,
                    p.place_id,
                    p.patrol_location,
                    p.status,
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

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS get_patrol_history');
    }
};
