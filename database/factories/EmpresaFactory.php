<?php

use Faker\Generator as Faker;

$factory->define(Uxcamp\Empresa::class, function (Faker $faker) {
    $companies=$faker->company();
    return [
        'name' => $companies,
        'bio'=> $faker->paragraph,
        'slug' => str_slug($companies),
        'avatar' => $faker->imageUrl($width=260, $height=260),
        

    ];
});
