<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Models\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'user_id'   => function () {
            return factory(User::class)->create();
        },
        'birthday'  => $faker->date,
        'hobbies'   => 'dibujar, cantar, leer, caminar, correr, cine',
    ];
});
