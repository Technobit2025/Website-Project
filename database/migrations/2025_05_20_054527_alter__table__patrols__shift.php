<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('patrols', function (Blueprint $table) {
            // Drop foreign key jika sebelumnya sudah ada
            $table->dropForeign(['shift_id']);

            // Tambahkan foreign key baru ke company_shifts
            $table->foreign('shift_id')
                ->references('id')
                ->on('company_shifts')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('patrols', function (Blueprint $table) {
            $table->dropForeign(['shift_id']);
        });
    }
};
