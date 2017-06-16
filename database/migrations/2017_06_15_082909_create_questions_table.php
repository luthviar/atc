<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_test')->unsigned();
            $table->integer('id_type')->unsigned();
            $table->integer('no_soal');
            $table->string('pertanyaan');
            $table->string('true_answer');
            $table->integer('skor_maks');
            $table->timestamps();

            $table->foreign('id_test')
                ->references('id')
                ->on('tests'); 

            $table->foreign('id_type')
                ->references('id')
                ->on('question_types'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
