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
            $table->increments('id');
            $table->string('primerNombre');
            $table->string('segundoNombre'); 
            $table->string('primerApellido'); 
            $table->string('segundoApellido');
            $table->string('tipoDocumento');
            $table->string('numeroIdentificacion');
            $table->string('sexo');
            $table->string('fechaNacimiento');
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
