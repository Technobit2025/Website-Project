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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('password');
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('email')->unique();
            $table->string('location')->nullable();
            $table->string('country_code')->nullable();
            $table->String('phone')->nullable();
            $table->string('skills')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('status')->default(1);
            $table->text('about_me')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('address')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->text('bio')->nullable();
            $table->integer('system_reserve')->default(0);
            $table->bigInteger('created_by_id')->unsigned()->nullable();
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
            // $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            // $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->foreign('created_by_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
