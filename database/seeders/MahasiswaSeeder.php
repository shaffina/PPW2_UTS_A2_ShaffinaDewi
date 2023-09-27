<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'nama' => 'Shotaro',
            'nim' => 0701,
            'alamat' => 'Jl. Kebangsaan 07',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => 'Sungchan',
            'nim' => 0702,
            'alamat' => 'Hyatt Regency',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => 'Eunseok',
            'nim' => 0703,
            'alamat' => 'Patraland',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => 'Wonbin',
            'nim' => 0704,
            'alamat' => 'Kemang Pratama',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => 'Seunghan',
            'nim' => 0705,
            'alamat' => 'Pondok Indah',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => 'Sohee',
            'nim' => 0706,
            'alamat' => 'Kota Wisata',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => 'Anton',
            'nim' => 0707,
            'alamat' => 'Menteng Raya',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
