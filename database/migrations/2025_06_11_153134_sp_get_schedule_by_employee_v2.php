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

CREATE PROCEDURE sp_get_employee_schedules_filtered_with_logs (
    IN p_company_id BIGINT,
    IN p_employee_id BIGINT,
    IN p_start_date DATE,
    IN p_end_date DATE
)
BEGIN
    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        -- Jika terjadi error SQL umum
        INSERT INTO schedule_error_logs (message, context)
        VALUES ('Unhandled SQL Exception in sp_get_employee_schedules_filtered', CONCAT('company_id:', p_company_id, ', employee_id:', p_employee_id));
        RESIGNAL;
    END;

    -- SELECT utama
    SELECT
        cs.date AS tanggal,
        CASE DAYOFWEEK(cs.date)
            WHEN 1 THEN 'Minggu'
            WHEN 2 THEN 'Senin'
            WHEN 3 THEN 'Selasa'
            WHEN 4 THEN 'Rabu'
            WHEN 5 THEN 'Kamis'
            WHEN 6 THEN 'Jumat'
            WHEN 7 THEN 'Sabtu'
        END AS waktu,
        cs.start_time AS jam_mulai,
        cs.end_time AS jam_selesai,

        -- Subquery lokasi
        (
            SELECT cp.name
            FROM company_attendances ca
            JOIN company_places cp ON ca.company_place_id = cp.id
            WHERE ca.employee_id = cs.employee_id
              AND DATE(ca.checked_in_at) = cs.date
            ORDER BY ca.checked_in_at DESC
            LIMIT 1
        ) AS lokasi,

        -- Subquery rekan tugas
        (
            SELECT GROUP_CONCAT(e2.fullname SEPARATOR ', ')
            FROM company_schedules cs2
            JOIN employees e2 ON cs2.employee_id = e2.id
            WHERE
                cs2.company_id = cs.company_id
                AND cs2.date = cs.date
                AND cs2.company_shift_id = cs.company_shift_id
                AND cs2.employee_id != cs.employee_id
        ) AS rekan_tugas

    FROM company_schedules cs
    JOIN employees e ON cs.employee_id = e.id
    WHERE
        (p_company_id IS NULL OR cs.company_id = p_company_id)
        AND (p_employee_id IS NULL OR cs.employee_id = p_employee_id)
        AND (p_start_date IS NULL OR cs.date >= p_start_date)
        AND (p_end_date IS NULL OR cs.date <= p_end_date)
        AND e.active = 1
    ORDER BY cs.date DESC, cs.start_time ASC;
END
");
    }
// check error pakai query ini :
// SELECT * FROM schedule_error_logs ORDER BY created_at DESC;


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       DB::unprepared("DROP PROCEDURE IF EXISTS sp_get_employee_schedules_filtered_with_logs");
    }
};
