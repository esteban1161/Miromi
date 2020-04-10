<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onUpdate('cascade');
            $table->Integer('rol_id')->unsigned();
            $table->integer('usuario_r_id')->nullable();
            $table->bigInteger('identificacion_id')->nullable();
            $table->bigInteger('formulario_id')->unsigned();
            $table->foreign('formulario_id')->references('id')->on('formularios')->onUpdate('cascade');                      
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
        Schema::dropIfExists('eventos');
    }
}
