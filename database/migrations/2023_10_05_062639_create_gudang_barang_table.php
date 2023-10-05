<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGudangBarangTable extends Migration
{
    public function up()
    {
        Schema::create('gudang_barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->integer('harga');
            $table->integer('stok');
            $table->integer('id_supplier');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('gudang_barang');
    }
};