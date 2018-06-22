<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Mission::class, function (Faker $faker) {

  return [
    'title' => $faker->sentence(6, true),
    'description' => $faker->text(200),
    'user_id' => "", //TODO
    'created_at' => $faker->dateTime(),
    'updated_at' => $faker->dateTime(),
    'deleted_at' => $faker->optional($weight = 0.4)->dateTime(),
    //QUESTION: WHAT optional($weight = 0.4) DOES?
  ];
});
