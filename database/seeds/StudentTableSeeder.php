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
      for ($i=0; $i < 700; $i++) {
        $gender = $faker->randomElement(['Male', 'Female'])[0];
        $name = $faker->firstName($gender);
        $surname = $faker->lastname;
        $domain = 'ied.edu';
        $uniqueFakeEmail = "$name.$surname@$domain";
        DB::table('students')->insert([
          'class_id' => $faker->numberBetween($min = 1, $max = 36),
          'badgeNumber' => $faker->numberBetween($min = 100000, $max = 999999),
          'name' => $name,
          'surname' => $surname,
          'birthday'=> $faker->date($format = 'Y-m-d', $max = 'now'),
          'userPicture' => $faker->imageUrl(400,300),
          'sex' => $gender,
          'details' => $faker->realText(180),
          'email' => strtolower($uniqueFakeEmail),
          'created_at'=> \Carbon\Carbon::now(),
          'updated_at'=> \Carbon\Carbon::now()


        ]);
      }

    }
}
