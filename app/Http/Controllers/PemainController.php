<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemain as Pemains;
class PemainController extends Controller
{
    public function index()
    {
        $data_pemain = Pemains::all()->sortBy('id');
        return view('uts.pemain', compact('data_pemain'));
    }

}
