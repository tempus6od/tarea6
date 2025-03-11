<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Curso;
use App\Kit;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extendes Factory
{
    protected $model = Curso::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence,
            'caratula' => $this->faker->imageUrl(640,450,'education',true),
            'contenido' => $this->faker->paragraph,
            'kit_robótica' => $faker->randomElement(['Kit Básico', 'Kit Intermedio', 'Kit Avanzado']),
        ];
    }
}



