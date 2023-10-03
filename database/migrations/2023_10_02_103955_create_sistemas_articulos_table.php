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
        Schema::create('sistemas_articulos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('sistema_id');
            $table->unsignedBigInteger('articulo_id');

            $table->foreign('sistema_id')->references('id')->on('sistemas');
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
        Schema::dropIfExists('sistemas_articulos');
    }
};
