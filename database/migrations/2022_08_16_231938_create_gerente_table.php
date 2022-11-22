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
        Schema::create('gerente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_Geren');
            $table->string('apellido_Geren');
            $table->date('fecha_Nac_Geren');
            $table->string('telefono_Geren');
            $table->string('direccion_Geren');
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
        Schema::dropIfExists('gerente');
    }
};
