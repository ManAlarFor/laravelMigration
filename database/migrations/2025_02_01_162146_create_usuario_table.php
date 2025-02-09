<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Ejecuta las migraciones.
     */
    public function up()
    {
        Schema::create('Usuario', function (Blueprint $table) {
            
            $table->increments('IdUsu');
            
            $table->string('NombreUsu', 45)->nullable();
            $table->string('ApellidoUsu', 90)->nullable();
            $table->text('PerfilUsu')->nullable();
            
        });
    }

    /**
     * Revierte las migraciones.
     */
    public function down()
    {
        Schema::dropIfExists('Usuario');
    }
}
