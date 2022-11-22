<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutina', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_Rutina');
            $table->string('objetivo');
            $table->boolean('estado_Rutina');
            $table->unsignedBigInteger('id_Ejercicio_FK');
            $table->unsignedBigInteger('identificacion_Entrenador_FK');
            $table->unsignedBigInteger('identificacion_Cliente_FK');
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('id_Ejercicio_FK')->references('id')->on('ejercicio')->onDelete('cascade');
            $table->foreign('identificacion_Entrenador_FK')->references('id')->on('entrenador')->onDelete('cascade');
            $table->foreign('identificacion_Cliente_FK')->references('id')->on('cliente')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rutina');
    }
};
