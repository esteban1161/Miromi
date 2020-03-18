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
            $table->string('TipoVinculacion');
            $table->string('Aseguradora');
            $table->string('ResponsableMedico');
            $table->string('ParentescoResponsable');
            $table->string('TelefonoResponsable');
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
        Schema::dropIfExists('datos_afiliacions');
    }
}
