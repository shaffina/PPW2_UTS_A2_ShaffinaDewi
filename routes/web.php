<?php

// jangan lupa bagian ini
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\riize;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PemainController;
// use App\Http\Controllers\BlogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::get('/riize', [riize::class, 'index']);

Route::get('/buku', [BukuController::class, 'index']);

Route::resource('blog', BlogController::class);

Route::get('/barang', [BarangController::class, 'index']);

Route::get('/pemain', [PemainController::class, 'index']);
