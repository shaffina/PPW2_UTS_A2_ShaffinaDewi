<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang as Barangs;

class BarangController extends Controller
{
    public function index()
    {
        $data_barang = Barangs::all()->sortBy('id');
        return view('barang', compact('data_barang'));
    }

}
