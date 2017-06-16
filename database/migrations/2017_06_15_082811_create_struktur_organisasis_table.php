<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStrukturOrganisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('struktur_organisasis', function (Blueprint $table) {
           $table->increments('id');
            $table->string('id_divisi');
            $table->string('id_department');
            $table->string('id_unit');
            $table->string('id_section');
            $table->timestamps();

            $table->foreign('id_divisi')
                ->references('id_divisi')
                ->on('divisis');

            $table->foreign('id_department')
                ->references('id_department')
                ->on('departments');

            $table->foreign('id_unit')
                ->references('id_unit')
                ->on('units');

            $table->foreign('id_section')
                ->references('id_section')
                ->on('sections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('struktur_organisasis');
    }
}
