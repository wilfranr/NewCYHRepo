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
        Schema::create('maquina_marca', function (Blueprint $table) {
            $table->unsignedBigInteger('maquina_id');
            $table->unsignedBigInteger('marca_id');
            $table->timestamps();

            // Definir las claves foráneas
            $table->foreign('maquina_id')->references('id')->on('maquinas')->onDelete('cascade');
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');

            // Definir la clave primaria compuesta
            $table->primary(['maquina_id', 'marca_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maquina_marca');
    }
};
