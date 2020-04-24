<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('evento_id')->unsigned()->nullable();
            $table->foreign('evento_id')->references('id')->on('eventos')->onUpdate('cascade')->nullable();
            $table->string('dxPrincipal')->nullable();
            $table->string('tipoDiagnostico')->nullable();
            $table->string('dxRelacionado1')->nullable();
            $table->string('dxRelacionado2')->nullable();
            $table->string('dxRelacionado3')->nullable();
            $table->string('tipoConsulta')->nullable();
            $table->string('finalidadConsulta')->nullable();
            $table->string('causaExterna')->nullable();
            $table->string('valorConsulta')->nullable();
            $table->string('tipoUsuario')->nullable();
            $table->string('observacionAnálisis')->nullable();
            $table->string('plan')->nullable();
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
        Schema::dropIfExists('consultas');
    }
}
