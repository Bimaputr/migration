<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama' => 'agus', 'jns_kelamin' => 'laki-laki', 'alamat' => 'bojong', 'kode_pos' => 01, 'kota' => 'solo', 'tgl_lahir' => 7],
            ['nama' => 'aming', 'jns_kelamin' => 'laki-laki', 'alamat' => 'rcm', 'kode_pos' => 02, 'kota' => 'bandung', 'tgl_lahir' => 4],
            ['nama' => 'siska', 'jns_kelamin' => 'perempuan', 'alamat' => 'bunderan', 'kode_pos' => 05, 'kota' => 'jakarta', 'tgl_lahir' => 6],
            ['nama' => 'arman', 'jns_kelamin' => 'laki-laki', 'alamat' => 'ujung', 'kode_pos' => 07, 'kota' => 'yogyakarta', 'tgl_lahir' => 8],
            ['nama' => 'ageng', 'jns_kelamin' => 'laki-laki', 'alamat' => 'begawan', 'kode_pos' => 19, 'kota' => 'solo', 'tgl_lahir' => 1],
        ];
        DB::table('pembelis')->insert($pembeli);
    }
}
