<?php

    // Manuel Alarcon Fortes

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class UsuarioSeeder extends Seeder
    {
        public function run()
        {
            $usuarios = [
                [
                    'IdUsu'         => 1,
                    'NombreUsu'     => 'Juan',
                    'ApellidoUsu'   => 'Pérez',
                    'PerfilUsu'     => 'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?w=200&h=200&fit=crop',
                ],
                [
                    'IdUsu'         => 2,
                    'NombreUsu'     => 'María',
                    'ApellidoUsu'   => 'Gómez',
                    'PerfilUsu'     => 'https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?w=200&h=200&fit=crop',
                ],
            ];

            DB::table('Usuario')->insert($usuarios);
        }
    }
