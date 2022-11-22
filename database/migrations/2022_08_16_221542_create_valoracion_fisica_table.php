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
        Schema::create('valoracion_fisica', function (Blueprint $table) {
            $table->id();
            $table->integer('peso');
            $table->integer('estatura');
            $table->string('descripcion_Medidas');
            $table->integer('imc');
            $table->date('fecha_Valoracion');
            $table->boolean('estado_Valoracion');
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
        Schema::dropIfExists('valoracion_fisica');
    }
};
