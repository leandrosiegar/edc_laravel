<?php

use Illuminate\Database\Seeder;
use App\Pelicula;

class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pelicula::create([
            'titulo' => 'Lo que el viento se llevó',
            'anno' => '1939'
        ]);

        Pelicula::create([
            'titulo' => 'Rebeca',
            'anno' => '1940'
        ]);
    }
}
