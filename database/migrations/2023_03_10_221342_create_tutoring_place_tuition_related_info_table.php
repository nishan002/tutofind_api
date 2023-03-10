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
        Schema::create('tutoring_place_tuition_related_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tuition_related_info_id');
            $table->unsignedBigInteger('tutoring_place_id');
            $table->timestamps();

            $table->foreign('tuition_related_info_id', 'tri_tp_id')->references('id')->on('tuition_related_infos')->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('tutoring_place_id', 't_place_id')->references('id')->on('tutoring_places')->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutoring_place_tuition_related_info');
    }
};
