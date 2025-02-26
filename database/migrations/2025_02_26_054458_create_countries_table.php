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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
			$table->string('name', 255)->nullable();
			$table->string('currency', 255)->nullable();
			$table->string('currency_symbol', 3)->nullable();
			$table->string('iso_3166_2', 2)->nullable();
			$table->string('iso_3166_3', 3)->nullable();
			$table->string('calling_code', 3)->nullable();
			$table->string('flag')->nullable();
            $table->string('currency_code', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
