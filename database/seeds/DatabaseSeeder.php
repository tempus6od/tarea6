<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsuariosTableSeeder::class,
            KitTableSeeder::class,
        ]);
        
        factory(App\Curso::class, 100)->create();
    }
}
