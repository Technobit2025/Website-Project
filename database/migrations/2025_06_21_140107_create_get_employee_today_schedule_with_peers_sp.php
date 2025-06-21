<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateGetEmployeeTodayScheduleWithPeersSp extends Migration
{
    public function up()
    {
        DB::unprepared("
           DROP PROCEDURE IF EXISTS get_employee_today_schedule_with_peers;

            CREATE PROCEDURE get_employee_today_schedule_with_peers(
                IN p_employee_id BIGINT
            )
            BEGIN
                DECLARE today DATE;
                SET today = CURDATE();

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
                    cp.name AS lokasi,
                    e2.fullname AS rekan_tugas

                FROM company_schedules cs
                JOIN employees e1 ON cs.employee_id = e1.id
                JOIN company_schedules cs2 ON cs.date = cs2.date 
                    AND cs.company_shift_id = cs2.company_shift_id
                    AND cs2.employee_id != cs.employee_id
                JOIN employees e2 ON cs2.employee_id = e2.id
                LEFT JOIN company_places cp ON cs.company_place_id = cp.id

                WHERE cs.employee_id = p_employee_id
                  AND cs.date = today;
            END
        ");
    }

    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS get_employee_today_schedule_with_peers;");
    }
}
