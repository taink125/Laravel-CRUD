<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Crud::class, function (Faker $faker) {
    return [
        'name' => $faker->name(3),
        'date' => $faker->date(),
        'gender' => $faker->boolean(),
        'email' => $faker->email(),
        'phone' => $faker->phoneNumber(11)
    ];
});
