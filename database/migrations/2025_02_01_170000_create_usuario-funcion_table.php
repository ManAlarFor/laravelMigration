<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioFuncionTable extends Migration
{
    /**
     * Ejecuta las migraciones.
     */
    public function up()
    {
        Schema::create('usuario_funcion', function (Blueprint $table) {

            $table->integer('IdUsu')->unsigned();
            $table->integer('IdFun')->unsigned();
            
            $table->primary(['IdUsu', 'IdFun']);

            $table->index('IdFun');

            $table->foreign('IdUsu')
                ->references('IdUsu')->on('Usuario')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('IdFun')
                ->references('IdFuncion')->on('Funcion')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Revierte las migraciones.
     */
    public function down()
    {
        Schema::dropIfExists('usuario_funcion');
    }
}
