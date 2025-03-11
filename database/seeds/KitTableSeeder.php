<?php

use App\Kit;
use Illuminate\Database\Seeder;

class KitTableSeeder extends Seeder
{
    public function run()
    {
       Kit::create(['nombre' => 'StarterKit']);
       Kit::create(['nombre' => 'Educational Robotics Kit']);
       Kit::create(['nombre' => 'Kit5']);
    }
}
