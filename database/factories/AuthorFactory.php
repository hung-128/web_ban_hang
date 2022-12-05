<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'lastname' => $faker->name(),
        'firstname' => $faker->name(),
        'birthday' => date('Y-m-d H:i:s', mt_rand(1, time())),
        'publised_books' => rand(5, 10),
    ];
});
