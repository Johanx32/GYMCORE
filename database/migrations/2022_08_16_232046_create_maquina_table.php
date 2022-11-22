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
        Schema::create('maquina', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_Maquina');
            $table->string('proveedor');
            $table->integer('cantidad');
            $table->string('lugar_Maquina');
            $table->boolean('estado_Maquina');
            $table->unsignedBigInteger('identificacion_Gerente_FK');
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('identificacion_Gerente_FK')->references('id')->on('gerente')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maquina');
    }
};
