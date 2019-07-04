<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComisionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comisiones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('turno', ['M', 'T', 'N'])->nullable();
            $table->enum('semestre', ['1', '2'])->nullable();
            $table->integer('anio')->nullable();

            $table->bigInteger('facultad_id')->unsigned();
            $table->bigInteger('carrera_id')->unsigned();
            $table->bigInteger('materia_id')->unsigned();
            $table->bigInteger('catedra_id')->unsigned();

            $table->foreign('facultad_id')->references('id')->on('facultades');

            $table->foreign('carrera_id')->references('id')->on('carreras');

            $table->foreign('materia_id')->references('id')->on('materias');

            $table->foreign('catedra_id')->references('id')->on('catedras');

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
        Schema::dropIfExists('comisiones');
    }
}
