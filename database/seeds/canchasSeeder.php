<?php

use Illuminate\Database\Seeder;

class canchasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('canchas')->insert([
            'nombre' => 'Cancha N° 1',
            'disponible' => '1',
            'idComplejoDeportivo' => '1',
        ]);
        DB::table('canchas')->insert([
            'nombre' => 'Cancha N° 2',
            'disponible' => '1',
            'idComplejoDeportivo' => '1',
        ]);
        DB::table('canchas')->insert([
            'nombre' => 'Cancha N° 3',
            'disponible' => '1',
            'idComplejoDeportivo' => '1',
        ]);
        DB::table('canchas')->insert([
            'nombre' => 'Cancha N° 1',
            'disponible' => '1',
            'idComplejoDeportivo' => '2',
        ]);
        DB::table('canchas')->insert([
            'nombre' => 'Cancha N° 2',
            'disponible' => '1',
            'idComplejoDeportivo' => '2',
        ]);
    }
}
