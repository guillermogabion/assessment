<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrderItem;
use Faker\Generator as Faker;

$factory->define(OrderItem::class, function (Faker $faker) {
    return [
        //
        'order_id' => rand(1, 10),
        'product_id' => rand(1, 10),
        'quantity' => rand(1, 10),
    ];
});
