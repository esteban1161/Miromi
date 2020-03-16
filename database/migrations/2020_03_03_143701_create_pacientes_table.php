<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('primerNombre', 20)->nullable();
            $table->string('segundoNombre', 20)->nullable();
            $table->string('primerApellido', 30)->nullable();
            $table->string('segundoApellido', 30)->nullable();
            $table->char('tipoDocumento', 2)->nullable();
            $table->bigInteger('numeroIdentificacion')->nullable();
            $table->char('sexo', 1)->nullable();
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
        Schema::dropIfExists('pacientes');
    }
}
