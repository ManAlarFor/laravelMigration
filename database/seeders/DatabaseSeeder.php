<?php

    // Manuel Alarcon Fortes

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;

    use Database\Seeders\FuncionSeeder;  
    use Database\Seeders\PortfolioSeeder;
    use Database\Seeders\UsuarioFuncionSeeder;
    use Database\Seeders\UsuarioSeeder;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            // Llama a tus seeders aquí
            $this->call(FuncionSeeder::class);
            $this->call(UsuarioSeeder::class);
            $this->call(UsuarioFuncionSeeder::class);
            // Agrega otros seeders según sea necesario
        }
    }
