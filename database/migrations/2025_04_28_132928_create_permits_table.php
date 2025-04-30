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

            $table->boolean("employeeIsConfirmed")->default(false);
            $table->boolean("alternateIsConfirmed")->default(false);

            $table->boolean("IsConfirmed")->default(false);
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
