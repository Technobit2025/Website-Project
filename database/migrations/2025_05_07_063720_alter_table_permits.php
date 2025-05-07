<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class altertablepermits extends Migration
{
    public function up()
    {
        Schema::table('permits', function (Blueprint $table) {
            // Menambahkan kolom 'date' bertipe date yang nullable, setelah kolom ke-5 (alternate_schedule_id)
            $table->date('date')->nullable()->after('alternate_schedule_id');

            // Menambahkan kolom 'permission' bertipe enum dengan nilai ('not confirmed', 'sakit', 'izin', 'cuti')
            // dan default 'not confirmed', setelah kolom 'date'
            $table->enum('permission', ['not confirmed', 'sakit', 'izin', 'cuti'])
                  ->default('not confirmed')
                  ->after('date');
        });
    }

    public function down()
    {
        Schema::table('permits', function (Blueprint $table) {
            $table->dropColumn(['date', 'permission']);
        });
    }
}
