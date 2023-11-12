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
        Schema::create('cotizacion_articulo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cotizacion_id');
            $table->unsignedBigInteger('articulo_id');
            $table->string('referencia');
            $table->string('definicion');
            $table->string('marca');
            $table->string('plazo_entrega');
            $table->decimal('precio_venta', 8, 0);
            $table->integer('cantidad');

            $table->foreign('cotizacion_id')->references('id')->on('cotizaciones');
            $table->foreign('articulo_id')->references('id')->on('articulos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotizacion_articulos');
    }
};
