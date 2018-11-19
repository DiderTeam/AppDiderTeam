<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Pablo Zuñiga',
            'email' => 'pablo.zuniga.vale@gmail.com',
            'password' => bcrypt('Laravel'),
        ]);
        DB::table('users')->insert([
            'name' => 'Sebastian Sandoval ',
            'email' => 'Seba_s@gmail.com',
            'password' => bcrypt('Laravel2'),
        ]);
        DB::table('users')->insert([
            'name' => 'Rodrigo Loyola',
            'email' => 'R_Loyola@gmail.com',
            'password' => bcrypt('Laravel3'),
        ]);
    }
}
