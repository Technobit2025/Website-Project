<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContactInfoToCompanyPlaceTable extends Migration
{
    public function up()
    {
        Schema::table('company_places', function (Blueprint $table) {
            $table->string('email')->nullable()->after('description');
            $table->string('phone')->nullable()->after('email');
            $table->string('website')->nullable()->after('phone');
        });
    }

    public function down()
    {
        Schema::table('company_place', function (Blueprint $table) {
            $table->dropColumn(['email', 'phone', 'website']);
        });
    }
}
