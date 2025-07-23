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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id_cliente');
            $table->timestamps();
            $table->string('nombres', length: 255)->nullable();
            $table->string('apellidos', length: 255)->nullable();
            $table->string('curp', length: 18)->nullable();
            $table->char('sexo', length: 13)->nullable();
            $table->string('calle')->nullable();
            $table->integer('numero')->nullable();
            $table->integer('codigo_postal')->nullable();
            $table->string('colonia', length: 255)->nullable();
            $table->string('ciudad', length: 255)->nullable();
            $table->string('estado')->nullable();
            $table->integer('dia_nac')->nullable();
            $table->integer('mes_nac')->nullable();
            $table->integer('ano_nac')->nullable();
            $table->string('correo', length: 255)->nullable();
            $table->string('telefono', length: 100)->nullable();
            $table->string('password', length: 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
