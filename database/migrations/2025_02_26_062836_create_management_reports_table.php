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
        Schema::create('management_reports', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade'); // Foreign Key
            $table->string('report_type', 255)->nullable();
            $table->date('report_date')->nullable();
            $table->text('report_content')->nullable();
            $table->string('attachment_path', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('management_reports');
    }
};
