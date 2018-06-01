<?php

use Faker\Generator as Faker;

$factory->define(App\Restaurant::class, function (Faker $faker) {
    return [
        'name' => str_random(3),
            'type' => $faker->randomElement(['Chinese', 'Mexican', 'Deshi','Indian']),
            'address' => $faker->address,
            'area' => $faker->randomElement(['Lalkhan Bazar', 'Muradpur', 'GEC','Agrabad', '2 no. gate', 'Chawkbazar']),
            'description' => $faker->text(),
    ];
});
