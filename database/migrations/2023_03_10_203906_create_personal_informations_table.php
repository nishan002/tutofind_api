<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_informations', function (Blueprint $table) {
            $table->id();
            $table->string('gender');
            $table->string('phone_number');
            $table->string('additional_number');
            $table->text('address');
            $table->string('identity_type');
            $table->string('identity_number');
            $table->date('date_of_birth');
            $table->string('religion');
            $table->string('nationality');
            $table->string('facebook_link');
            $table->string('linkedin_link');
            $table->string('overview');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('father_number');
            $table->string('mother_number');
            $table->string('name_of_emergency_contact_person')->nullable();
            $table->string('number_of_emergency_contact_person')->nullable();
            $table->string('relation_emergency_contact_person')->nullable();
            $table->string('address_of_emergency_contact_person')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_informations');
    }
};
