<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RIIZE extends Controller
{
 public function index() {
 $nama = '04/09/2023';
 $title_track = ['Siren', 'Memories', 'Get a Guitar'];
 return view('biodata', ['nama' => $nama, 'lagu' => $title_track]);
 }
}

