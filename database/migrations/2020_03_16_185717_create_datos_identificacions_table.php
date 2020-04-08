<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosIdentificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_identificacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('evento_id')->unsigned()->nullable();
            $table->foreign('evento_id')->references('id')->on('eventos')->onUpdate('cascade')->nullable();
            $table->string('primerNombre')->nullable();
            $table->string('segundoNombre')->nullable(); 
            $table->string('primerApellido')->nullable(); 
            $table->string('segundoApellido')->nullable();
            $table->string('tipoDocumento')->nullable();
            $table->string('numeroIdentificacion')->nullable();
            $table->string('sexo')->nullable();
            $table->date('fechaNacimiento')->nullable();
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
        Schema::dropIfExists('datos_identificacions');
    }
}
