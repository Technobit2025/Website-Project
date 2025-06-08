<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::table('company_attendances', function (Blueprint $table) {
            // Rename kolom dari status ke kondisi
            $table->renameColumn('status', 'kondisi');
        });

        // Ubah enum-nya setelah rename (karena enum perlu raw SQL)
        DB::statement("ALTER TABLE company_attendances MODIFY COLUMN kondisi ENUM('aman', 'tidak aman', 'null') NOT NULL DEFAULT 'aman'");
    }

    public function down()
    {
        // Rollback perubahan enum ke yang sebelumnya
        DB::statement("ALTER TABLE company_attendances MODIFY COLUMN kondisi ENUM('pending','approved','rejected') NOT NULL DEFAULT 'pending'");

        Schema::table('company_attendances', function (Blueprint $table) {
            // Rename kembali kolom kondisi ke status
            $table->renameColumn('kondisi', 'status');
        });
    }
};