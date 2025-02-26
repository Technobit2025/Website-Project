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
        Schema::create('salaries', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade'); 
            $table->decimal('base_salary', 10, 2)->nullable(); 
            $table->decimal('allowance', 10, 2)->nullable(); 
            $table->decimal('debt', 10, 2)->nullable(); 
            $table->decimal('total_salary', 10, 2)->nullable(); 
            $table->date('payment_date')->nullable(); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salaries');
    }
};
