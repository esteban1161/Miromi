<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosConsultoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_consultorios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('datos_identificacion_id')->nullable()->unsigned();
            $table->foreign('datos_identificacion_id')->references('id')->on('datos_identificacions');
            $table->string('nombreConsultorio')->nullable();
            $table->string('telefonoConsultorio')->nullable();
            $table->string('direccionConsultorio')->nullable();
            $table->string('correoElectronicoConsultorio')->nullable();
            $table->string('paginaWebConsultorio')->nullable();
            $table->string('codigoSecretaria')->nullable();
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
        Schema::dropIfExists('datos_consultorios');
    }
}
