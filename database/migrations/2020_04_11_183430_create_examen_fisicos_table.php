<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenFisicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_fisicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('evento_id')->unsigned()->nullable();
            $table->foreign('evento_id')->references('id')->on('eventos')->onUpdate('cascade')->nullable();
            $table->string('peso')->nullable();
            $table->string('talla')->nullable();
            $table->string('temperatura')->nullable();
            $table->string('presionArterial')->nullable();
            $table->string('frecuenciaCardiaca')->nullable();
            $table->string('frecuenciaRespiratoria')->nullable();
            $table->string('saturaciónO2')->nullable();
            $table->string('aspectoGeneral')->nullable();
            $table->string('otorrinolaringologico')->nullable();
            $table->string('cuello')->nullable();
            $table->string('cardioPulmonar')->nullable();
            $table->string('abdomen')->nullable();
            $table->string('genitales')->nullable();
            $table->string('miembros')->nullable();
            $table->string('pielAnexosEF')->nullable();
            $table->string('neurológico')->nullable();
            $table->string('otros')->nullable();
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
        Schema::dropIfExists('examen_fisicos');
    }
}
