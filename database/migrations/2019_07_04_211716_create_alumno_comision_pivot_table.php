<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoComisionPivotTable extends Migration
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

            $table->float('nota')->nullable();
            $table->boolean('condicion')->nullable();

            $table->bigInteger('alumno_id')->unsigned();
            $table->bigInteger('comision_id')->unsigned();

            $table->foreign('alumno_id')->references('id')->on('alumnos')->onDelete('cascade');
            $table->foreign('comision_id')->references('id')->on('comisiones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alumno_comision');
    }
}
