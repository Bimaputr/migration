<?php

namespace App\Http\Controllers;

use App\Models\pesanan;

class PesananController extends Controller
{
    public function tampil()
    {
        $pesanan = pesanan::all();
        return view('pesanan', compact('pesanan'));

    }
}
