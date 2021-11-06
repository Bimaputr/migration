<?php

namespace App\Http\Controllers;

use App\Models\pembeli;

class PembelisController extends Controller
{
    public function tampil()
    {
        $pembeli = pembeli::all();
        return view('pembeli', compact('pembeli'));

    }
}
