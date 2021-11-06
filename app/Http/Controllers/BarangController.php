<?php

namespace App\Http\Controllers;

use App\Models\barang;

class BarangController extends Controller
{

    public function tampilkan()
    {

        $barang = barang::all();
        return view('barang', compact('barang'));

    }

}
