<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class reservasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datos_usuarios')->insert([
            'id' => '1',
            'rut' => '18864709k',
            'nombre' => 'Pablo',
            'telefono' => '+56976489530',
            'rol' => 'Alumno',
            'carrera' => 'Ing de ejecucion en informatica',
            'bloqueado' => 0,
        ]);
    }
}
