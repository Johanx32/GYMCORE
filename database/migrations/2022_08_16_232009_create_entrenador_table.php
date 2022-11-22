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
        Schema::create('entrenador', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_Entre');
            $table->string('apellido_Entre');
            $table->date('fecha_Nac_Entre');
            $table->string('telefono_Entre');
            $table->string('direccion_Entre');
            $table->boolean('estado_Entre');
            $table->unsignedBigInteger('identificacion_Usuario_FK')->unique()->unsigned();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('identificacion_Usuario_FK')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrenador');
    }
};
