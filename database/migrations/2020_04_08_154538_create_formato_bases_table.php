<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormatoBasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formato_bases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('evento_id')->unsigned()->nullable();
            $table->foreign('evento_id')->references('id')->on('eventos')->onUpdate('cascade')->nullable();
            $table->string('nombreAcompañante')->nullable();
            $table->string('parentescoAcompañante')->nullable();
            $table->date('fechaConsulta')->nullable();            
            $table->time('horaConsulta')->nullable();            
            $table->string('edadActual')->nullable();
            $table->string('motivoConsulta')->nullable();            
            $table->string('enfermedadActual')->nullable();
            $table->string('consultorio')->nullable();
            $table->string('personalizado1')->nullable();
            $table->string('personalizado2')->nullable();
            $table->string('personalizado3')->nullable();
            $table->string('personalizado4')->nullable();
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
        Schema::dropIfExists('formato_bases');
    }
}
