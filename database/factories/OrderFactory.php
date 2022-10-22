<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        //
        'invoice_number' => $faker->regexify('[A-Z]{5}[0-4]{3}'),
        'user_id' => rand(1, 100),
        'order_date' => $faker->date(),
    ];
});
