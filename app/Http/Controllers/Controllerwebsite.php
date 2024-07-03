<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controllerwebsite extends Controller
{
    public function index()
    {
        // mengambil data mahasiswa berdasarkan id yang dipilih
        $beranda = DB::table('beranda')->where('status_tampil_beranda','1') ->get();
        // passing data mahasiswa yang didapat ke view edit.blade.php
        return view('index', ['beranda' => $beranda]);
    }
}
