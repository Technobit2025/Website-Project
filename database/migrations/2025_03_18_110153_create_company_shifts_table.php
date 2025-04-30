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
        Schema::create('company_shifts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade');
            $table->string('name');
            $table->time('start_time'); // waktu shift          06:00:00
            $table->time('end_time');   //waktu selesai shift   12:00:00
            $table->time('late_time'); // waktu telat           06:30:00
            $table->time('checkout_time'); // waktu boleh co    11:55:00
            $table->string('color');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_shifts');
    }
};
