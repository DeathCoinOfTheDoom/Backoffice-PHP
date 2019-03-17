<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'phone_number' => $faker->unique()->e164PhoneNumber,
        'password' => bcrypt('password'),
        'admin' => 1,
        'fistname' => $faker->firstNameMale,
        'lastname' => $faker->lastName,
        'email' => $faker->safeEmail,
        'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'address' => $faker->streetAddress,
        'postal_code' => $faker->postcode,
        'city' => $faker->city,
        'country' => $faker->country
    ];
});
