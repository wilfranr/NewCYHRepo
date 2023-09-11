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
        Schema::create('articulos_juegos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('articulo_id');
            $table->unsignedBigInteger('juego_por_id');
            $table->timestamps();

            $table->foreign('articulo_id')->references('id')->on('articulos');
            $table->foreign('juego_por_id')->references('id')->on('articulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos_juegos');
    }
};
