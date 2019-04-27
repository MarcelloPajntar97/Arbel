<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker\Generator $faker) {
    $gender = $faker->randomElement(['Male', 'Female'])[0];
    return [
      'class_id' => $faker->numberBetween($min = 1, $max = 36),
      'badgeNumber' => $faker->numberBetween($min = 100000, $max = 999999),
      'name' => $name,
      'surname' => $surname,
      'email' => $uniqueFakeEmail,
      'birthday'=> $faker->date($format = 'Y-m-d', $max = 'now') ,
      'sex' => $gender
    ];
});
