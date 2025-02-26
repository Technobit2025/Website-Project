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
        Schema::create('patrol_logs', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade'); 
            $table->string('placement', 255)->nullable(); 
            $table->string('qr_photo', 255)->nullable(); 
            $table->string('area_photo', 255)->nullable(); 
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); 
            $table->foreignId('reviewed_by')->nullable()->constrained('users')->onDelete('set null'); 
            $table->timestamp('reviewed_at')->nullable(); 
            $table->timestamp('timestamp')->default(now()); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patrol_logs');
    }
};
