<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComisionesHasAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_comision', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('comision_id')->unsigned();
            $table->bigInteger('alumno_id')->unsigned();
            $table->float('nota')->nullable();
            $table->boolean('condicion')->nullable();

            $table->foreign('comision_id')->references('id')->on('comisiones');

            $table->foreign('alumno_id')->references('id')->on('alumnos');

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
        Schema::dropIfExists('comisiones_has_alumnos');
    }
}
