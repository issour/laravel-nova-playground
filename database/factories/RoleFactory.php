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

$factory->define(App\Models\Role::class, function (Faker $faker) {

	$word = $faker->word;

    return [
        'display_name' => ucfirst($word),
        'system_name' => strtolower($word),
    ];

});