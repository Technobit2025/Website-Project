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
        Schema::create('permits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            $table->foreignId('alternate_id')->nullable()->constrained('employees')->onDelete('cascade');

            $table->foreignId('employee_schedule_id')->nullable()->constrained('company_schedules')->onDelete('cascade');
            $table->foreignId('alternate_schedule_id')->nullable()->constrained('company_schedules')->onDelete('cascade');

            $table->enum("employee_is_confirmed", ["approved", "rejected", "pending"])->default("pending");
            $table->enum("alternate_is_confirmed", ["approved", "rejected", "pending"])->default("pending");

            $table->enum("status", ["approved", "rejected", "pending"])->default("pending");
            $table->enum('type', [
                'Sick Leave',
                'Leave',
                'Absent',
                'Late',
                'Leave Early',
                'WFH'
            ])->nullable();
            $table->text("reason")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permits');
    }
};
