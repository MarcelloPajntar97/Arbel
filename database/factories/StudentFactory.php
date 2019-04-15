<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker\Generator $faker) {
    return [
      'badgeNumber' => $faker->sentence,
      'name' => $faker->name,
      'surname' => $faker->lastname,
      'birthday' => $faker->year,
      'sex' => $faker->title
    ];
});
