<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Car::class, function (Faker $faker) {
    $engineType = collect([
        'Diesel',
        'Gasoline',
        'Natural Gas'
    ]);
    return [
        'mark' => $faker->text(15),
        'model' => $faker->text(15),
        'year' => $faker->numberBetween(1960, 2017),
        'max_speed' => $faker->numberBetween(20, 300),
        'is_automatic' => $faker->boolean(30),
        'engine' => $engineType->random(),
        'number_of_doors' => $faker->numberBetween(2, 5)
    ];

});
