<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_academicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('datos_identificacion_id')->nullable()->unsigned();
            $table->foreign('datos_identificacion_id')->references('id')->on('datos_identificacions');
            $table->string('tipoProfesional')->nullable();
            $table->string('numeroRegistroProfesional')->nullable();
            $table->string('tituloAcademico')->nullable();
            $table->string('institucion')->nullable();
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
        Schema::dropIfExists('datos_academicos');
    }
}
