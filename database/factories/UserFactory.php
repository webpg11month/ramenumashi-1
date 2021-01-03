<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Table\User;
use App\Table\Shop;

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {
    return [
        // 'email_verified_at' => now(),
        'user_id' => Str::random(10),
        'email' => $faker->unique()->safeEmail,
        'tel' => mt_rand(10000000000,99999999999),
        'age' => mt_rand(1,130),
        'sex' => mt_rand(1,3),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'dlflag'=>1
    ];
});

$factory->define(Shop::class, function (Faker $faker) {
    return [
        'shop_id' => Str::random(10),
        'shop_email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'area_id' => '1',
        'shop_name' => '24',
        'shop_address' => '大阪府大阪市',
        'seat' => 1,
        'show_data' => mt_rand(20,30),
        'dlflag'=>1,
        'img'=>'dumy'.mt_rand(1,3).'.png',
        'img1'=>'dumy'.mt_rand(1,3).'.png',
        'img2'=>'dumy'.mt_rand(1,3).'.png',
        'avarage_price' => mt_rand(1000,1500).'円～'.mt_rand(1501,2000).'円',

    ];
});