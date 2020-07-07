<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcedimientosEnfermeriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedimientos_enfermerias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('evento_id')->unsigned()->nullable();
            $table->foreign('evento_id')->references('id')->on('eventos')->onUpdate('cascade')->nullable();
            $table->date('fechaProcedimiento')->nullable();
            $table->string('nombreProcedimiento')->nullable();
            $table->text('descripcionProcedimiento', 2000)->nullable();
            $table->string('observaciones')->nullable();
            $table->string('complicaciones')->nullable();
            $table->string('insumos')->nullable();
            $table->string('otrosProcedimientos')->nullable();
            $table->string('personalizado1')->nullable();
            $table->string('personalizado2')->nullable();
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
        Schema::dropIfExists('procedimientos_enfermerias');
    }
}
