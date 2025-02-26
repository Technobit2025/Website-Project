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
        Schema::create('patrols', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade'); 
            $table->foreignId('shift_id')->constrained('shifts')->onDelete('cascade'); 
            $table->string('patrol_location', 255)->nullable(); 
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); 
            $table->foreignId('reviewed_by')->nullable()->constrained('users')->onDelete('set null'); 
            $table->timestamp('reviewed_at')->nullable(); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patrols');
    }
};
