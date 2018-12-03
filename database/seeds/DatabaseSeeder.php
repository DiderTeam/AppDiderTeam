<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(userSeeder::class);
        $this->call(datosUsuarioSeeder::class);
        $this->call(reservasSeeder::class);
        $this->call(ComplejoDeportivoTableSeeder::class);
        $this->call(canchasSeeder::class);
        $this->call(bloqueReservaSeeder::class);
        $this->call(bloqueHorarioSeeder::class);
    }
}
