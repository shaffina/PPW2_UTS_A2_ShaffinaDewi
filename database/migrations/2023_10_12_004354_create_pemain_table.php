<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemainTable extends Migration
{
    public function up()
    {
        Schema::create('data_pemain', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemain');
            $table->integer('no_punggung');
            $table->string('posisi');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('data_pemain');
    }
};
