<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntecedentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('evento_id')->unsigned()->nullable();
            $table->foreign('evento_id')->references('id')->on('eventos')->onUpdate('cascade')->nullable();
            $table->string('patológicos')->nullable();
            $table->string('quirúrgicos')->nullable();
            $table->string('farmacológicos')->nullable();
            $table->string('toxicológicos')->nullable();
            $table->string('familiares')->nullable();
            $table->string('traumáticos')->nullable();
            $table->string('hospitalarios')->nullable();
            $table->string('inmunológicosVacunas')->nullable();
            $table->string('alérgicos')->nullable();
            $table->string('tratamientoOdontológico')->nullable();
            $table->string('formulaObstétrica')->nullable(); 
            $table->string('fechaUltimaMenstruacion')->nullable();
            $table->string('menarquia')->nullable();
            $table->string('menopausia')->nullable();
            $table->string('planificación')->nullable();
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
        Schema::dropIfExists('antecedentes');
    }
}
