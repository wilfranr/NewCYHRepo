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
    Schema::create('pedido_sistema', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('pedido_id');
        $table->unsignedBigInteger('sistema_id');
        // Otros campos necesarios para la relación
        $table->timestamps();

        $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
        $table->foreign('sistema_id')->references('id')->on('sistemas')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_sistema');
    }
};
