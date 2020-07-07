<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevisionSistemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revision_sistemas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('evento_id')->unsigned()->nullable();
            $table->foreign('evento_id')->references('id')->on('eventos')->onUpdate('cascade')->nullable();
            $table->string('cabeza')->nullable();
            $table->string('cardioPulmonarRS')->nullable();
            $table->string('urinario')->nullable();
            $table->string('extremidadesRS')->nullable();
            $table->string('psiquismo')->nullable();
            $table->string('organosSentidos')->nullable();
            $table->string('digestivo')->nullable();
            $table->string('genital')->nullable(); 
            $table->string('pielAnexosRS')->nullable();
            $table->string('endocrinologico')->nullable();
            $table->string('otrosRSistemas')->nullable();
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
        Schema::dropIfExists('revision_sistemas');
    }
}
