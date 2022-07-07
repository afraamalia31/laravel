<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return ('<h1>Halaman Index</h1>');
    }

    public function devfram() {
        return view('loopfor');
    }

    public function hasilujian() {
        return view('ujian', ['siswa'=>'Afra', 'nilai'=>95]);
    }

}
