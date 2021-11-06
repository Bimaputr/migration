<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pembeliansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_barang' => 'Kardus', 'nama_supllier' => 'gus', 'qty' => 100, 'tgl' => 01],
            ['nama_barang' => 'kresek', 'nama_supllier' => 'man', 'qty' => 100, 'tgl' => 02],
            ['nama_barang' => 'plastik', 'nama_supllier' => 'sep', 'qty' => 100, 'tgl' => 03],
            ['nama_barang' => 'karung', 'nama_supllier' => 'tar', 'qty' => 100, 'tgl' => 04],
            ['nama_barang' => 'sendok', 'nama_supllier' => 'cep', 'qty' => 100, 'tgl' => 05],
        ];
        DB::table('pembelians')->insert($pembelian);
    }
}
