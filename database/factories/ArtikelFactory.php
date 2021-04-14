<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artikel;
use Faker\Generator as Faker;

$factory->define(Artikel::class, function (Faker $faker) {
    return [
        'admin_id'=> rand(1,2),
        'title'=>$faker->sentence(),
        'slug'=>\Str::slug($faker->sentence()),
        'body'=>$faker->paragraph(10),

    ];
});
