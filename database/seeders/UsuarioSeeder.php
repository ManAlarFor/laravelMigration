<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Ejecuta el seeder.
     */
    public function run()
    {
        $usuarios = [
            [
                'IdUsu'         => 1,
                'NombreUsu'     => 'Juan',
                'ApellidoUsu'   => 'Pérez',
                'EdadUsu'       => 25,
                'CorreoUsu'     => 'juan.perez@example.com',

                'ContrasenaUsu' => md5('password123'),
                'PerfilUsu'     => 'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?w=200&h=200&fit=crop',
            ],
            [
                'IdUsu'         => 2,
                'NombreUsu'     => 'María',
                'ApellidoUsu'   => 'Gómez',
                'EdadUsu'       => 30,
                'CorreoUsu'     => 'maria.gomez@example.com',
                'ContrasenaUsu' => md5('securePass456'),
                'PerfilUsu'     => 'https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?w=200&h=200&fit=crop',
            ],
            // Agrega los demás registros siguiendo el mismo patrón...
            // Recuerda incluir todos los registros que necesites.
        ];

        DB::table('Usuario')->insert($usuarios);
    }
}
