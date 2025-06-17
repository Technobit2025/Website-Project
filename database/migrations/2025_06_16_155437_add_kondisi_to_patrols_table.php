<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('patrols', function (Blueprint $table) {
            $table->enum('kondisi', ['aman', 'tidak aman', 'null']) // 👈 string 'null'
                  ->after('updated_at')
                  ->default('null'); // Karena kolom ini NOT NULL
        });
    }

    public function down(): void
    {
        Schema::table('patrols', function (Blueprint $table) {
            $table->dropColumn('kondisi');
        });
    }
};

