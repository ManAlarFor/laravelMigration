<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuncionSeeder extends Seeder
{
    /**
     * Ejecuta el seeder.
     */
    public function run()
    {
        $funciones = [
            ['IdFuncion' => 1,  'NombreFuncion' => 'Cantante'],
            ['IdFuncion' => 2,  'NombreFuncion' => 'Bajista'],
            ['IdFuncion' => 3,  'NombreFuncion' => 'Guitarrista'],
            ['IdFuncion' => 4,  'NombreFuncion' => 'Baterista'],
            ['IdFuncion' => 5,  'NombreFuncion' => 'Pianista'],
            ['IdFuncion' => 6,  'NombreFuncion' => 'Trompetista'],
            ['IdFuncion' => 7,  'NombreFuncion' => 'Saxofonista'],
            ['IdFuncion' => 8,  'NombreFuncion' => 'Violinista'],
            ['IdFuncion' => 9,  'NombreFuncion' => 'Productor Musical'],
            ['IdFuncion' => 10, 'NombreFuncion' => 'Ingeniero de Sonido'],
            ['IdFuncion' => 11, 'NombreFuncion' => 'DJ'],
            ['IdFuncion' => 12, 'NombreFuncion' => 'Compositor'],
            ['IdFuncion' => 13, 'NombreFuncion' => 'Letrista'],
            ['IdFuncion' => 14, 'NombreFuncion' => 'Arreglista'],
            ['IdFuncion' => 15, 'NombreFuncion' => 'Director de Orquesta'],
            ['IdFuncion' => 16, 'NombreFuncion' => 'Percusionista'],
            ['IdFuncion' => 17, 'NombreFuncion' => 'Flautista'],
            ['IdFuncion' => 18, 'NombreFuncion' => 'Clarinettista'],
            ['IdFuncion' => 19, 'NombreFuncion' => 'Contrabajista'],
            ['IdFuncion' => 20, 'NombreFuncion' => 'Trombonista'],
            ['IdFuncion' => 21, 'NombreFuncion' => 'Oboísta'],
            ['IdFuncion' => 22, 'NombreFuncion' => 'Corista'],
            ['IdFuncion' => 23, 'NombreFuncion' => 'Maestro de Canto'],
            ['IdFuncion' => 24, 'NombreFuncion' => 'Músico de Estudio'],
            ['IdFuncion' => 25, 'NombreFuncion' => 'Técnico de Grabación'],
            ['IdFuncion' => 26, 'NombreFuncion' => 'Violonchelista'],
            ['IdFuncion' => 27, 'NombreFuncion' => 'Bandoneonista'],
            ['IdFuncion' => 28, 'NombreFuncion' => 'Arpista'],
            ['IdFuncion' => 29, 'NombreFuncion' => 'Instrumentista de Viento-Madera'],
            ['IdFuncion' => 30, 'NombreFuncion' => 'Instrumentista de Viento-Metal'],
        ];

        DB::table('Funcion')->insert($funciones);
    }
}
