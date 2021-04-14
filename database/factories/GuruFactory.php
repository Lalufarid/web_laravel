<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Guru;
use Faker\Generator as Faker;

$factory->define(Guru::class, function (Faker $faker) {
    return [
        'name' =>$faker->sentence(),
        'slug'=>\Str::slug($faker->sentence()),
        'mapel' =>$faker->sentence(),
        'alamat' =>$faker->sentence()
    ];
});
