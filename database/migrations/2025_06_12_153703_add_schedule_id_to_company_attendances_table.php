
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddScheduleIdToCompanyAttendancesTable extends Migration
{
    public function up()
    {
        Schema::table('company_attendances', function (Blueprint $table) {
            $table->unsignedBigInteger('schedule_id')->nullable()->after('employee_id');

            // Tambahkan foreign key ke company_schedules
            $table->foreign('schedule_id')
                  ->references('id')->on('company_schedules')
                  ->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('company_attendances', function (Blueprint $table) {
            $table->dropForeign(['schedule_id']);
            $table->dropColumn('schedule_id');
        });
    }
}
