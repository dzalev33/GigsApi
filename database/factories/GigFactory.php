<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Gig::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle,
        'description' => $faker->text(50),
        'number_of_positions' => $faker->randomDigit,
        'pay_per_hour' => $faker->numberBetween($min = 1000, $max = 9000)   ,
        'status' =>$faker->boolean
    ];
});
