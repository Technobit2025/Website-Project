<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('patrols', function (Blueprint $table) {
            $table->unsignedBigInteger('place_id')->after('shift_id');

            // Tambahkan foreign key
            $table->foreign('place_id')
                  ->references('id')
                  ->on('company_places')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('patrols', function (Blueprint $table) {
            // Drop foreign key dan kolomnya
            $table->dropForeign(['place_id']);
            $table->dropColumn('place_id');
        });
    }
};
