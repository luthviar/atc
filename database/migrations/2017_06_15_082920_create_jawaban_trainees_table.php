<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJawabanTraineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_trainees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_question')->unsigned();
            $table->string('isi_jawaban');
            $table->integer('skor')->nullable();
            $table->timestamps();

            $table->foreign('id_question')
                ->references('id')
                ->on('questions'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban_trainees');
    }
}
