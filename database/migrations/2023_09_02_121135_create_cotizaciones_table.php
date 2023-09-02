<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //funcion para crear la tabla
    public function up()
    {
        // Crear la tabla
        Schema::create('cotizaciones', function (Blueprint $table) {
            // Definir las columnas de la tabla
            $table->id();
            $table->string('estado');
            $table->unsignedBigInteger('pedido_id');
            $table->unsignedBigInteger('tercero_id');
            
            // Definir las claves foráneas
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->foreign('tercero_id')->references('id')->on('terceros');
            
            // Definir los campos de control
            $table->timestamps();
        });
    }

    //funcion para eliminar la tabla
    public function down()
    {
        // Eliminar la tabla si existe
        Schema::dropIfExists('cotizaciones');
    }
};
