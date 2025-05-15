<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('patrols', function (Blueprint $table) {
            $table->string('patrol_location')->nullable()->after('place_id');
        });
    }

    public function down(): void
    {
        Schema::table('patrols', function (Blueprint $table) {
            $table->dropColumn('patrol_location');
        });
    }
};
