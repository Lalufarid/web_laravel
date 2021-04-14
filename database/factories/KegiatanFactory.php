<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kegiatan;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Kegiatan::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(),
        'slug'=>\Str::slug($faker->sentence()),
        'body'=>$faker->paragraph(10),
    ];
});
