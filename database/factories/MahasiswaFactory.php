<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

$factory->define(App\Mahasiswa::class, function (Faker\Generator $faker) {
    return [
        'nama' => $faker->name,
        'nim' => $faker->unique()->numberBetween(700, 799),
        'alamat' => $faker->address,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
