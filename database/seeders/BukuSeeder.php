<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    public function run()
    {
        // Menggunakan factory untuk membuat 10 data palsu
        Buku::factory(10)->create();
    }
}
