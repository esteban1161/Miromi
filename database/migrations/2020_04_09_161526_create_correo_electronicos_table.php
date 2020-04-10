<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorreoElectronicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correo_electronicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('evento_id')->unsigned()->nullable();
            $table->foreign('evento_id')->references('id')->on('eventos')->onUpdate('cascade')->nullable();
            $table->string('tipoCorreo')->nullable();
            $table->string('correoElectronico')->nullable();
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
        Schema::dropIfExists('correo_electronicos');
    }
}

