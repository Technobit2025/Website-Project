<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();  // secara default ini adalah unsignedBigInteger
            $table->unsignedBigInteger('schedule_id')->nullable(); // Menggunakan unsignedBigInteger
            $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('set null'); // Mengatur foreign key
            $table->unsignedBigInteger('employee_id');
            $table->dateTime('check_in_time');
            $table->dateTime('check_out_time');
            $table->string('location');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
