<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Models\Note;
use Faker\Generator as Faker;

$factory->define(Note::class, function (Faker $faker) {
    return [
        'user_id'   => function () {
            return factory(User::class)->create();
        },
        'title'     => $faker->text(20),
        'note'      => $faker->text,
    ];
});
