<?php

namespace App\Http\Controllers;

use App\Models\suplier;

class SuplierController extends Controller
{
    public function tampil()
    {
        $suplier = suplier::all();
        return view('suplier', compact('suplier'));

    }
}
