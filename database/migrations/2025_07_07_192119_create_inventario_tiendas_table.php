<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inventario_tiendas', function (Blueprint $table) {
            $table->id('id_inventario_tienda');
            $table->timestamps();
            $table->integer('cantidad')->nullable();
        });

        Schema::table('inventario_tiendas', function (Blueprint $table) {
           $table->unsignedBigInteger('id_producto')->nullable();
           $table->foreign('id_producto')->references('id_producto')->on('productos');
           $table->unsignedBigInteger('id_tienda')->nullable();
           $table->foreign('id_tienda')->references('id_tienda')->on('tiendas');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventario_tiendas');
    }
};
