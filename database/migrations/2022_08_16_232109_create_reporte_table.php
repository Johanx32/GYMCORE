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
        Schema::create('reporte', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_Reporte');
            $table->string('descripcion');
            $table->boolean('estado_Reporte');
            $table->unsignedBigInteger('id_Maquina_FK');
            $table->unsignedBigInteger('identificacion_Usuario_FK');
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('id_Maquina_FK')->references('id')->on('maquina')->onDelete('cascade');
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
        Schema::dropIfExists('reporte');
    }
};
