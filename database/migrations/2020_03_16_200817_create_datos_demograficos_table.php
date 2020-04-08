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
            $table->bigInteger('evento_id')->unsigned()->nullable();
            $table->foreign('evento_id')->references('id')->on('eventos')->onUpdate('cascade')->nullable();
            $table->string('paisNacimiento')->nullable();
            $table->string('ciudadNacimiento')->nullable();
            $table->string('estadoCivil')->nullable();
            $table->string('escolaridad')->nullable();
            $table->string('ocupacion')->nullable();
            $table->string('credoReligioso')->nullable();
            $table->string('paisResidencia')->nullable();
            $table->string('departamentoResidencia')->nullable();
            $table->string('ciudadResidencia')->nullable();
            $table->string('localidadResidencia')->nullable();
            $table->string('direccionResidencia')->nullable();
            $table->char('zonaResidencia')->nullable();
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
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
