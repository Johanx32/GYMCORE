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
        Schema::create('mantenimiento', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_Mantenimiento', 50);
            $table->string('diagnostico_Manteni', 100);
            $table->date('fecha_Inicio');
            $table->date('fecha_Fin');
            $table->boolean('estado_Mantenimiento');
            $table->unsignedBigInteger('id_Maquina_FK');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_Maquina_FK')->references('id')->on('maquina')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mantenimiento');
    }
};
