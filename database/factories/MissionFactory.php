<?php

use Faker\Generator as Faker;

$factory->define(App\Mission::class, function (Faker $faker) {

  return [
    'title' => $faker->sentence(6, true),
    'description' => $faker->text(200),
    'user_id' => $factory->create(App\User::class)->id,
    'created_at' => $faker->dateTime(),
    'updated_at' => $faker->dateTime(),
    'deleted_at' => $faker->optional($weight = 0.4)->dateTime(),
    //QUESTION: WHAT optional($weight = 0.4) DOES?
    /*
      ANSWER:
      The optional() function avoid that an error in the function that is passed to
      optional() as parameter is raised, and optional() returns 'null' instead to raise the error.
      In this particular case, since an assignament returns somnething that is not null,
      the optional() function does nothing.
    */
  ];
});
