<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionTable extends Migration
{
    /**
     * Ejecuta las migraciones.
     */
    public function up()
    {
        Schema::create('Funcion', function (Blueprint $table) {
            $table->increments('IdFuncion');

            $table->string('NombreFuncion', 45);
        });
    }

    /**
     * Revierte las migraciones.
     */
    public function down()
    {
        Schema::dropIfExists('Funcion');
    }
}
