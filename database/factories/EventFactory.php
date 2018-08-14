<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'name'         =>   $faker->text(50),
        'description'  =>   $faker->text(200),
        'code'         =>   $fake->str_number(5),
        'status'       =>   1 
    ];
});
