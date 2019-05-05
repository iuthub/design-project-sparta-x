<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => ucfirst($faker->word),
        'description' => $faker->paragraph(5),
        'price' => $faker->randomFloat(5,3, 8),
    ];
});
