<?php

use Faker\Generator as Faker;
use App\User;
use App\Country;

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

$factory->define(User::class, function (Faker $faker) {
    $totalCountries = Country::all()->count();
    return [
        'name' => $faker->name($gender = null),
        'username' => $faker->username,
        'email' => $faker->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'country_id' => $faker->numberBetween(1, $totalCountries),
        'avatar' => 'default.jpg',
        'score' => $faker->numberBetween(1, 250),
        'active' => $faker->numberBetween(0,1),
        'remember_token' => str_random(10),
    ];
});
