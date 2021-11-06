<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pesanansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['nama_pelanggan' => 'agus', 'nama_barang' => 'gelas', 'qty' => 50, 'tgl_pesanan' => 1],
            ['nama_pelanggan' => 'bagus', 'nama_barang' => 'meja', 'qty' => 50, 'tgl_pesanan' => 2],
            ['nama_pelanggan' => 'bagas', 'nama_barang' => 'sendok', 'qty' => 50, 'tgl_pesanan' => 3],
            ['nama_pelanggan' => 'rika', 'nama_barang' => 'piring', 'qty' => 50, 'tgl_pesanan' => 4],
            ['nama_pelanggan' => 'ika', 'nama_barang' => 'garpuh', 'qty' => 50, 'tgl_pesanan' => 5],
        ];
        DB::table('pesanans')->insert($pesanan);
    }
}
