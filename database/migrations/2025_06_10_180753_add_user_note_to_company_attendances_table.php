<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('company_attendances', function (Blueprint $table) {
            $table->text('user_note')->nullable()->after('note');
        });
    }

    public function down()
    {
        Schema::table('company_attendances', function (Blueprint $table) {
            $table->dropColumn('user_note');
        });
    }
};