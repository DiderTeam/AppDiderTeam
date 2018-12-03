<?php

use Illuminate\Database\Seeder;

class ComplejoDeportivoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('complejos_deportivos')->insert([
            'id' => '1',
            'nombre' => 'Gimnasio CC PUCV',
            'horarioInicio' => '09:00:00',
            'horarioFinal' => '17:00:00',
            'direccion' => 'Brasil 2950, Valparaíso, Región de Valparaíso',
            'coordenada' => 'X94V+6M Valparaíso',
        ]);
        DB::table('complejos_deportivos')->insert([
            'id' => '2',
            'nombre' => 'Estadio Español',
            'horarioInicio' => '15:00:00',
            'horarioFinal' => '18:00:00',
            'direccion' => 'Alonso de Ercilla 795, Viña del Mar, Región de Valparaíso',
            'coordenada' => 'XC9H+3F Viña del Mar',
        ]);
    }
}
