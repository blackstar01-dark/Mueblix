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
        Schema::create('tiendas', function (Blueprint $table) {
            $table->id('id_tienda');
            $table->timestamps();
            $table->string('calle', length: 50)->nullable();
            $table->integer('numero_calle')->nullable();
            $table->string('colonia', length: 50)->nullable();
            $table->string('ciudad', length: 50)->nullable();
            $table->string('estado', length: 50)->nullable();
            $table->integer('codigo_postal')->nullable();
        });

        Schema::table('tiendas', function (Blueprint $table) {
           $table->unsignedBigInteger('id_empleado_tienda')->nullable();
           $table->foreign('id_empleado_tienda')->references('id_empleado_tienda')->on('empleado_tiendas');

           $table->unsignedBigInteger('id_administrador_tienda')->nullable();
           $table->foreign('id_administrador_tienda')->references('id_administrador_tienda')->on('administrador_tiendas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiendas');
    }
};
