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
        Schema::create('tuition_related_infos', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('location');
            $table->integer('total_experience');
            $table->text('experience_details');
            $table->string('availability');
            $table->string('tutoring_style');
            $table->double('expected_salary');
            $table->dateTime('tuition_from_time');
            $table->dateTime('tuition_to_time');
            $table->string('tutoring_method');
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
        Schema::dropIfExists('tuition_related_infos');
    }
};
