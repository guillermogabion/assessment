<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'sku' => $faker->regexify('[A-Z]{5}[0-4]{3}'),
        'name' => $faker->word,
        'price' => rand(1, 100)
    ];
});
