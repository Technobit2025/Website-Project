<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('company_places', function (Blueprint $table) {
            $table->string('nfc_tag_uid')->nullable()->unique()->after('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('company_places', function (Blueprint $table) {
            $table->dropColumn('nfc_tag_uid');
        });
    }
};
