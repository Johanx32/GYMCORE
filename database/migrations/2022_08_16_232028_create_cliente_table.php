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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_Clie');
            $table->string('apellido_Clie');
            $table->date('fecha_Nac_Clie');
            $table->string('telefono_Clie');
            $table->string('direccion_Clie');
            $table->boolean('estado_Clie');
            $table->unsignedBigInteger('identificacion_Usuario_FK')->unique()->unsigned();
            $table->unsignedBigInteger('id_valoracionFisica_FK');
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('id_valoracionFisica_FK')->references('id')->on('valoracion_fisica')->onDelete('cascade');
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
        Schema::dropIfExists('cliente');
    }
};
