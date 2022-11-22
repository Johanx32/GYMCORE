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
        Schema::create('ejercicio', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_Ejercicio');
            $table->string('tiempo_Ejercicio');
            $table->string('series_Ejercicio');
            $table->string('musculos_Involucrados');
            $table->string('ejemplo_Ejercicio');
            $table->boolean('estado_Ejercicio');
            $table->timestamps();
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ejercicio');
    }
};
