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
        Schema::create('preferred_location_tuition_related_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tuition_related_info_id');
            $table->unsignedBigInteger('preferred_location_id');
            $table->timestamps();

            $table->foreign('tuition_related_info_id', 'tri_id')->references('id')->on('tuition_related_infos')->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('preferred_location_id', 'pref_loc_id')->references('id')->on('preferred_locations')->onUpdate('cascade')
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
        Schema::dropIfExists('preferred_location_tuition_related_info');
    }
};
