<?php

namespace App\Http\Controllers;

use App\Models\pembelian;

class PembelianController extends Controller
{
    public function tampil()
    {

        $pembelian = pembelian::all();
        return view('pembelian', compact('pembelian'));

    }

}
