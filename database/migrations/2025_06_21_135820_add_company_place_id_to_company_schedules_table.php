<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompanyPlaceIdToCompanySchedulesTable extends Migration
{
    public function up()
    {
        Schema::table('company_schedules', function (Blueprint $table) {
            $table->unsignedBigInteger('company_place_id')->nullable()->after('company_shift_id');

            $table->foreign('company_place_id', 'company_schedules_place_fk')
                ->references('id')->on('company_places')
                ->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('company_schedules', function (Blueprint $table) {
            $table->dropForeign('company_schedules_place_fk');
            $table->dropColumn('company_place_id');
        });
    }
}
