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
        Schema::create('tutor_educations', function (Blueprint $table) {
            $table->id();
            $table->string('level');
            $table->string('degree');
            $table->string('group');
            $table->string('institute');
            $table->boolean('current_institute')->default(0);
            $table->string('curriculumn')->nullable();
            $table->string('id_number')->nullable();
            $table->float('result');
            $table->integer('passing_year');
            $table->date('edu_from_date');
            $table->date('edu_to_date');
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
        Schema::dropIfExists('tutor_educations');
    }
};
