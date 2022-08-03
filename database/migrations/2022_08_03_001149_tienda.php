<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tienda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tienda', function (Blueprint $table) {
            $table->id("idTienda");
            $table->integer("CostoDelivery");
            $table->string("estado");
            $table->string("acepta_pedidos");
            $table->string("direccion_tienda");
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
        //
        Schema::dropIfExists('tienda');
    }
}
