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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->after('id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('fullname');
            $table->string('nickname')->nullable();
            $table->string('phone')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('emergency_phone')->nullable();
            
            // data pribadi
            $table->enum('gender', ['male', 'female']);
            $table->date('birth_date');
            $table->string('birth_place')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('nationality')->default('Indonesia');
            $table->string('religion')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('id_number')->unique(); // ktp atau passport
            $table->string('tax_number')->nullable(); // npwp
            $table->string('social_security_number')->nullable(); // bpjs ketenagakerjaan
            $table->string('health_insurance_number')->nullable(); // bpjs kesehatan
        
            // alamat
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('postal_code')->nullable();
        
            // pekerjaan
            $table->string('department')->nullable();
            $table->string('position')->nullable();
            $table->enum('employment_status', ['permanent', 'contract', 'internship', 'freelance']);
            $table->date('hire_date');
            $table->date('contract_end_date')->nullable();
            $table->decimal('salary', 15, 2)->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_account_number')->nullable();
        
            // absen
            $table->boolean('active')->default(true);
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
