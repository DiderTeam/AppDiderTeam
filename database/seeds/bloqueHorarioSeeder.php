<?php

use Illuminate\Database\Seeder;
use App\ComplejoDeportivo as ComplejoDeportivo;
class bloqueHorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $horaMin = ComplejoDeportivo::all()->pluck('horarioInicio')->min();
        $horaMax = ComplejoDeportivo::all()->pluck('horarioFinal')->max();
        for($i=$horaMin;$i<=$horaMax;)
        {
            DB::table('bloque_horarios')->insert([
                'bloqueInicio' => $i,
                'bloqueFinal' => $i = date("H:i:s",strtotime($i)+60*60),
            ]);
        }
    }
}
