<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioTable extends Migration
{
    /**
     * Ejecuta las migraciones.
     */
    public function up()
    {
        Schema::create('portfolio', function (Blueprint $table) {
            $table->increments('IdPublic');

            $table->string('TituloPubic', 45);
            
            $table->text('TextoPublic')->nullable();
            
            $table->string('ImagenPublic', 250)->nullable();
            
            $table->integer('IdUsu')->unsigned();
            $table->index('IdUsu'); 
            
            $table->foreign('IdUsu')
                  ->references('IdUsu')->on('Usuario')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Revierte las migraciones.
     */
    public function down()
    {
        Schema::dropIfExists('portfolio');
    }
}
