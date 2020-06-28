<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'book_name' => $faker->sentence(3),
        'book_author_name' => $faker->sentence(2),
        'book_price' => $faker->numberBetween(180, 600),
    ];

});
