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
            $table->string('motivoConsulta', 1000)->nullable();            
            $table->text('enfermedadActual', 20000)->nullable();
            $table->string('consultorio')->nullable();
            $table->string('paraclinicos', 1000)->nullable();
            $table->string('tratamientoActual', 1000)->nullable();      
            $table->string('personalizado1', 1000)->nullable();
            $table->string('personalizado2', 1000)->nullable();
            $table->string('personalizado3', 1000)->nullable();
            $table->string('personalizado4', 1000)->nullable();
            $table->text('observacionesPrivadas', 10000)->nullable();
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
