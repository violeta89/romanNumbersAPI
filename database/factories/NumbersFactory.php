<?php

use Faker\Generator as Faker;

$factory->define(App\Number::class, function (Faker $faker) {
    return [
        'conv_number' => $faker->numberBetween($min = 1, $max = 3999),
        'conv_times' => $faker->numberBetween($min = 1, $max = 10)
    ];
});
