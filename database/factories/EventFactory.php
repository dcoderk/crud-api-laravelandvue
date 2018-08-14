<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'name'         => $faker->text(30),
        'description'  => $faker->text(200),
        'code'         => str_random(10),
        'status'       => 1
    ];
});
