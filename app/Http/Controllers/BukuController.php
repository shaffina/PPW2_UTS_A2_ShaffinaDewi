<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku as BukuModel;

class BukuController extends Controller
{
    public function index()
    {
        $data_buku =BukuModel::all()->sortBy('id');
        $jumlah_buku = BukuModel::count();
        $jumlah_harga = BukuModel::sum('harga');
        return view('buku', compact('data_buku','jumlah_buku','jumlah_harga'));
    }
}

