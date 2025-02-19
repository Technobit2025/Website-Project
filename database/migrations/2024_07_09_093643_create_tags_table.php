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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('type')->default('blog');
            $table->longText('description')->nullable();
            $table->bigInteger('created_by_id')->unsigned();
            $table->integer('status')->default(1)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('created_by_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('blog_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_id')->unsigned();
            $table->unsignedBigInteger('tag_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade')->nullable();
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('blog_tags');
    }
};
