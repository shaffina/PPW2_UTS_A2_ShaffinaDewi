<?php

namespace Database\Factories;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    protected $model = Buku::class;

    public function definition()
    {
        return [
            'judul' => $this->faker->sentence,
            'penulis' => $this->faker->name,
            'harga' => $this->faker->numberBetween(10, 100),
            'tgl_terbit' => $this->faker->date,
        ];
    }
}