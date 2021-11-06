<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class supliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['nama' => 'agus', 'alamat' => 'bandung', 'kode_pos' => 1, 'kota' => 'bandung'],
            ['nama' => 'asep', 'alamat' => 'subang', 'kode_pos' => 4, 'kota' => 'jakarta'],
            ['nama' => 'amer', 'alamat' => 'ujung', 'kode_pos' => 5, 'kota' => 'yogya'],
            ['nama' => 'juli', 'alamat' => 'cuka', 'kode_pos' => 9, 'kota' => 'cikampek'],
            ['nama' => 'mana', 'alamat' => 'padaa', 'kode_pos' => 8, 'kota' => 'padalarang'],
        ];
        DB::table('supliers')->insert($suplier);
    }
}
