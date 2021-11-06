<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class barangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['id_barang' => 1, 'nama' => 'Kardus', 'varian' => 'green', 'harga_beli' => 100000, 'harga_jual' => 80000],
            ['id_barang' => 2, 'nama' => 'sofa', 'varian' => 'grey', 'harga_beli' => 1000000, 'harga_jual' => 800000],
            ['id_barang' => 3, 'nama' => 'meja', 'varian' => 'transparan', 'harga_beli' => 1500000, 'harga_jual' => 1400000],
            ['id_barang' => 4, 'nama' => 'lemari', 'varian' => 'bigsize', 'harga_beli' => 2000000, 'harga_jual' => 1500000],
            ['id_barang' => 5, 'nama' => 'lantai', 'varian' => 'batik', 'harga_beli' => 100000, 'harga_jual' => 100000],
        ];
        DB::table('barangs')->insert($barang);

    }
}
