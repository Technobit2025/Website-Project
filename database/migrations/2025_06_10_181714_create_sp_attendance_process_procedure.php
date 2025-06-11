<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::unprepared("

CREATE PROCEDURE sp_create_or_update_attendance (
    IN p_employee_id INT,
    IN p_company_place_id INT,
    IN p_photo_path TEXT,
    IN p_user_note TEXT,
    IN p_is_manual BOOLEAN
)
proc: BEGIN
    DECLARE v_now DATETIME;
    DECLARE v_now_time TIME;
    DECLARE v_schedule_id INT;
    DECLARE v_schedule_date DATE;
    DECLARE v_schedule_start TIME;
    DECLARE v_schedule_end TIME;
    DECLARE v_attendance_id INT DEFAULT NULL;
    DECLARE v_checked_in_at DATETIME;
    DECLARE v_status VARCHAR(20);

    SET v_now = NOW();
    SET v_now_time = TIME(v_now);
    SET v_schedule_date = DATE(v_now);

    -- Cek apakah sudah check-in tapi belum checkout
    SELECT id, checked_in_at INTO v_attendance_id, v_checked_in_at
    FROM company_attendances
    WHERE employee_id = p_employee_id
      AND DATE(created_at) = v_schedule_date
      AND checked_out_at IS NULL
    LIMIT 1;

    IF v_attendance_id IS NOT NULL THEN
        -- Tentukan status checkout (Leave Early atau tetap)
        SELECT cs.end_time INTO v_schedule_end
        FROM company_schedules cs
        WHERE cs.employee_id = p_employee_id
          AND cs.date = v_schedule_date
        LIMIT 1;

        IF v_schedule_end IS NOT NULL AND TIME(v_now) < v_schedule_end THEN
            UPDATE company_attendances
            SET checked_out_at = v_now,
                updated_at = v_now,
                status = 'Leave Early',
                user_note = NULLIF(TRIM(p_user_note), '')
            WHERE id = v_attendance_id;
        ELSE
            UPDATE company_attendances
            SET checked_out_at = v_now,
                updated_at = v_now,
                user_note = NULLIF(TRIM(p_user_note), '')
            WHERE id = v_attendance_id;
        END IF;

        LEAVE proc;
    END IF;

    -- Ambil jadwal shift
    SELECT cs.id, cs.start_time, cs.end_time
    INTO v_schedule_id, v_schedule_start, v_schedule_end
    FROM company_schedules cs
    WHERE cs.employee_id = p_employee_id
      AND cs.date = v_schedule_date
    LIMIT 1;

    -- Jika tidak ada jadwal dan bukan manual
    IF v_schedule_id IS NULL AND NOT p_is_manual THEN
        SET v_status = 'No Schedule';
    ELSEIF p_is_manual THEN
        SET v_status = 'Manual';
    ELSE
        -- Validasi jam shift
        IF v_schedule_start > v_schedule_end THEN
            -- Shift malam
            IF NOT (v_now_time >= v_schedule_start OR v_now_time <= v_schedule_end) THEN
                SIGNAL SQLSTATE '45000'
                SET MESSAGE_TEXT = 'Waktu presensi tidak cocok untuk shift malam';
            END IF;
        ELSE
            -- Shift biasa
            IF v_now_time < (v_schedule_start - INTERVAL 1 HOUR) OR v_now_time > (v_schedule_end + INTERVAL 1 HOUR) THEN
                SIGNAL SQLSTATE '45000'
                SET MESSAGE_TEXT = 'Waktu presensi di luar batas shift';
            END IF;
        END IF;

        -- Set status: Late jika lewat 15 menit dari start
        IF v_now_time > (v_schedule_start + INTERVAL 15 MINUTE) THEN
            SET v_status = 'Late';
        ELSE
            SET v_status = 'Present';
        END IF;
    END IF;

    -- Cek apakah sudah presensi lengkap
    IF EXISTS (
        SELECT 1 FROM company_attendances
        WHERE employee_id = p_employee_id
          AND DATE(created_at) = v_schedule_date
          AND checked_out_at IS NOT NULL
    ) THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Presensi hari ini sudah lengkap';
    END IF;

    -- Simpan check-in (tanpa user_note)
    INSERT INTO company_attendances (
        employee_id,
        company_place_id,
        checked_in_at,
        status,
        photo_path,
        created_at,
        updated_at
    )
    VALUES (
        p_employee_id,
        p_company_place_id,
        v_now,
        v_status,
        p_photo_path,
        v_now,
        v_now
    );
END;


        ");
    }

    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_create_or_update_attendance");
    }
};
