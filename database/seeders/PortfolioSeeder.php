<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Ejecuta el seeder.
     */
    public function run()
    {
        $data = [
            [
                'IdPublic'    => 33,
                'TituloPubic' => 'Mi Primera Canción',
                'TextoPublic' => 'Estoy emocionado de compartir mi primera composición con el mundo. Ha sido un viaje increíble desde que comencé a escribir música, y esta pieza es un reflejo de mis emociones. Espero que al escucharla puedan conectar con los sentimientos que intenté plasmar. Gracias por apoyar mi música.',
                'ImagenPublic'=> null,
                'IdUsu'       => 1,
            ],
            [
                'IdPublic'    => 34,
                'TituloPubic' => 'Concierto en Vivo',
                'TextoPublic' => 'El concierto en el teatro principal fue una experiencia inolvidable. Interpreté algunas de mis piezas favoritas y tuve la oportunidad de conectar profundamente con el público. Estas imágenes capturan algunos de esos momentos mágicos. Espero volver pronto a este escenario.',
                'ImagenPublic'=> 'https://images.unsplash.com/photo-1506784365847-bbad939e9335?w=500&h=300&fit=crop',
                'IdUsu'       => 2,
            ],
        ];

        DB::table('portfolio')->insert($data);
    }
}
