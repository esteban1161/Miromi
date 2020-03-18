<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosDemograficosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_demograficos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('datos_identificacion_id')->nullable()->unsigned();
            $table->foreign('datos_identificacion_id' )->references('id')->on('datos_identificacions');
            $table->string('paisNacimiento');
            $table->string('ciudadNacimiento');
            $table->string('estadoCivil');
            $table->string('escolaridad');
            $table->string('ocupacion');
            $table->string('credoReligioso');
            $table->string('paisResidencia');
            $table->string('departamentoResidencia');
            $table->string('ciudadResidencia');
            $table->string('localidadResidencia');
            $table->string('direccionResidencia');
            $table->char('zonaResidencia');
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
        Schema::dropIfExists('datos_demograficos');
    }
}
