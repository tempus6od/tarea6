<?php

use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuariosTableSeeder extends Seeder
{
    public function run()
    {
        Usuario::create([
            'nombre' => 'Admon',
            'email' => 'admon@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'rol' => 'Administrativo',
        ]);

        Usuario::create([
            'nombre' => 'Tecmilenio',
            'email' => 'tecmilenio@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'rol' => 'Profesor',
        ]);

        Usuario::create([
            'nombre' => 'Estudiante',
            'email' => 'student@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'rol' => 'Estudiante',
        ]);
    }
}
