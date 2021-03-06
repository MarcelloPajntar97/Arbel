<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'=>'Luca',
            'surname'=>'Infante',
            'email'=>'luca.infante@ied.edu',
            'password'=>bcrypt('cavolo'),
            'isAdmin'=>0
        ]);

        App\User::create([
            'name'=>'Fabrizio',
            'surname'=>'Infante',
            'email'=>'fabrizio.infante@ied.edu',
            'password'=>bcrypt('credenti'),
            'isAdmin'=>0
        ]);

        App\User::create([
            'name'=>'Mauro',
            'surname'=>'Paffi',
            'email'=>'mauro.paffi@ied.edu',
            'password'=>bcrypt('vivalafiga'),
            'isAdmin'=>0
        ]);

        App\User::create([
            'name'=>'Segreteria',
            'surname'=>'Università',
            'email'=>'segreteria.uni@ied.edu',
            'password'=>bcrypt('segreteria!'),
            'isAdmin'=>1
        ]);
    }
}
