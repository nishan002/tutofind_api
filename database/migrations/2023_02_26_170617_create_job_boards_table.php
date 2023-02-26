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
        Schema::create('job_boards', function (Blueprint $table) {
            $table->id();
            $table->string('job_id')->nullable();
            $table->string('post_date')->nullable();
            $table->string('tuition_type')->nullable();
            $table->string('city')->nullable();
            $table->string('location')->nullable();
            $table->string('category')->nullable();
            $table->string('class')->nullable();
            $table->string('subjects')->nullable();
            $table->string('student_gender')->nullable();
            $table->string('tutor_gender')->nullable();
            $table->string('address_details')->nullable();
            $table->string('institute_name')->nullable();
            $table->string('number_of_students')->nullable();
            $table->string('days_in_week')->nullable();
            $table->string('prefer_time')->nullable();
            $table->string('hire_date')->nullable();
            $table->string('salary')->nullable();
            $table->string('ask_question')->nullable();
            $table->string('job_description')->nullable();
            $table->string('job_status')->nullable();
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
        Schema::dropIfExists('job_boards');
    }
};
