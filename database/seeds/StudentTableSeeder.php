<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;



class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $faker = Faker::create('it_IT');
      for ($i=0; $i < 2000; $i++) {
        $gender = $faker->randomElement(['Male', 'Female'])[0];
        DB::table('students')->insert([
          'badgeNumber' => $faker->numberBetween($min = 100000, $max = 999999),
          'name' => $faker->firstName($gender),
          'surname' => $faker->lastname,
          'birthday'=> $faker->date($format = 'Y-m-d', $max = 'now') ,
          'sex' => $gender,
          'created_at'=> \Carbon\Carbon::now(),
          'updated_at'=> \Carbon\Carbon::now()


        ]);
      }

    }
}
