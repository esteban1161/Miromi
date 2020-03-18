<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosAfiliacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_afiliacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('datos_identificacion_id')->nullable()->unsigned();
            $table->foreign('datos_identificacion_id')->references('id')->on('datos_identificacions');
            $table->string('tipoVinculacion');
            $table->string('aseguradora');
            $table->string('responsableMedico');
            $table->string('parentescoResponsable');
            $table->string('telefonoResponsable');
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
        Schema::dropIfExists('datos_afiliacions');
    }
}
