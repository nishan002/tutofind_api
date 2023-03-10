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
        Schema::create('subject_tuition_related_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tuition_related_info_id');
            $table->unsignedBigInteger('subject_id');
            $table->timestamps();

            $table->foreign('tuition_related_info_id', 'tri_s_id')->references('id')->on('tuition_related_infos')->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('subject_id')->references('id')->on('subjects')->onUpdate('cascade')
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
        Schema::dropIfExists('subject_tuition_related_info');
    }
};
