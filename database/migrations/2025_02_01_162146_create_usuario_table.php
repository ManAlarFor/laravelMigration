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
            // Crea la columna primaria auto-incremental
            $table->increments('IdUsu');
            
            // Define las demás columnas, respetando el tamaño (donde corresponde) y permitiendo nulos
            $table->string('NombreUsu', 45)->nullable();
            $table->string('ApellidoUsu', 90)->nullable();
            $table->integer('EdadUsu')->nullable();  // Nota: Laravel no usa "int(3)"; se usa integer sin longitud
            $table->text('CorreoUsu')->nullable();
            $table->text('ContrasenaUsu')->nullable();
            $table->text('PerfilUsu')->nullable();
            
            // Si deseas, puedes agregar timestamps (created_at y updated_at)
            // $table->timestamps();
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
