<?php

    // Manuel Alarcon Fortes

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class UsuarioFuncionSeeder extends Seeder
    {
        /**
         * Ejecuta el seeder.
         */
        public function run()
        {
            $data = [
                ['IdUsu' => 1,  'IdFun' => 1],
                ['IdUsu' => 2,  'IdFun' => 6],
                ['IdUsu' => 2, 'IdFun' => 16],
            ];

            DB::table('usuario_funcion')->insert($data);
        }
    }
