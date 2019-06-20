<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\VideoGames;
use Faker\Generator as Faker;

$factory->define(VideoGames::class, function (Faker $faker) {
    
    return [
        'nombre' => $faker->sentence(2),
        'genero' => $faker->sentence(1),
        'año' => $faker->sentence(1),
        'puntaje' => $faker->text(50),
    ];
});