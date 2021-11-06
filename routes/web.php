<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PembelisController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\SuplierController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});
Route::get('hal2', function () {
    return "<h1>Selamat Datang di Halaman 2</h2>";
});
Route::get('Biodata', function () {
    $nama = "Bima";
    $jk = "laki-laki";
    $tl = "Purworejo";
    $ll = "09 Agustus 2003";
    $alm = "Rancamanyar Baleendah";
    $agm = "Islam";
    $hobi = "Bermain";

    return "<h2>Selamat Datang<br></h2> Nama: " . $nama .
        "<br>Jenis Kelamin: " . $jk .
        "<br>Tempat lahir " . $tl .
        "<br>Tanggal Lahir: " . $ll .
        "<br>Alamat: " . $alm .
        "<br>Agama: " . $agm .
        "<br>Hobi: " . $hobi;

});
// Route::get('biodata2', function () {
//     $nama = "Bima";
//     $jk = "laki-laki";
//     $tl = "Purworejo";
//     $ll = "09 Agustus 2003";
//     $alm = "Rancamanyar Baleendah";
//     $agm = "Islam";
//     $hobi = "Bermain";
//     return view('Biodata', compact('nama', 'jk', 'tl', 'll', 'alm', 'agm', 'hobi'));
// });
Route::get('/input/{nama}/{jk}/{tl}/{ll}/{alm}/{agm}/{hobi}', function ($nama, $jk, $tl, $ll, $alm, $agm, $hobi) {
    echo "Nama Saya : " . $nama;
    echo "<br>Jenis kelamin :" . $jk;
    echo "<br>Tempat Lahir :" . $tl;
    echo "<br>Tanggal lahir :" . $ll;
    echo "<br>Alamat :" . $alm;
    echo "<br>Agama :" . $agm;
    echo "<br>Hobi :" . $hobi . " :)";
});
Route::get('blog', function () {
    $data = [
        ['nis' => 1, 'nama' => 'Alya', 'jeniskelamin' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Nata Endah'],
        ['nis' => 2, 'nama' => 'Anggi', 'jeniskelamin' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Cilebak'],
        ['nis' => 3, 'nama' => 'Anisa', 'jeniskelamin' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bojong Cijerah'],
        ['nis' => 4, 'nama' => 'Arif', 'jeniskelamin' => 'Laki-Laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Cibedug'],
        ['nis' => 5, 'nama' => 'Astri', 'jeniskelamin' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Pasawahan'],
        ['nis' => 6, 'nama' => 'Azhar', 'jeniskelamin' => 'Laki-Laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Rancamanyar'],
        ['nis' => 7, 'nama' => 'Aziz', 'jeniskelamin' => 'Laki-Laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Isekai'],
        ['nis' => 8, 'nama' => 'Bima', 'jeniskelamin' => 'Laki-Laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Rancamanyar'],
        ['nis' => 9, 'nama' => 'Cindy', 'jeniskelamin' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Rancamanyar'],
        ['nis' => 10, 'nama' => 'Dinda', 'jeniskelamin' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bojong malaka indah'],
    ];

    //dd($data);
    return view('blog', compact('data'));
});
Route::get('siswa', function () {
    $siswas = [
        ['id' => 1,
            'nama' => 'aditya',
            'username' => 'aditya01',
            'email' => 'aditya@gmail.com',
            'alamat' => 'Bandung',
            'mapel' => [
                'mapel1' => 'Bahasa Indonesia',
                'mapel2' => 'Bahasa Inggris',
                'mapel3' => 'Bahasa Jepang',
                'mapel4' => 'Bahasa Belanda',
            ],
        ],
    ];
    return view('siswa', compact('siswas'));
});
//Route Parameter Optional
// Route::get('/input/{nama?}', function ($nama = "Hampura Dulur,tidak adak data") {
//     echo "Nama Saya : " . $nama;
// });

Route::get('/inputnilai/{nama?}/{mtk?}/{pro?}/{indo?}/{ingris?}', function ($nama = null, $mtk = 0, $pro = 0, $indo = 0, $ingris = 0) {
    echo "Nama Saya:" . $nama . "<br>";
    echo "Nialai Maatematika : " . $mtk . "<br>";
    echo "Nialai Produktif : " . $pro . "<br>";
    echo "Nialai Bahasa Indonesia :  " . $indo . "<br>";
    echo "Nialai Bahsa Inggris : " . $ingris . "<br>";

    $ratarata = ($mtk + $pro + $indo + $ingris) / 4;

    echo "Rata-rata :" . $ratarata . "<br>";
    echo "Grade : ";
    if ($ratarata >= 90) {
        echo "A";
    } elseif ($ratarata >= 80) {
        echo "B";
    } elseif ($ratarata >= 70) {
        echo "C";
    } else {
        echo "D";
    }
});
Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null, $minuman = null, $cemilan = null) {

    if ($makanan = $makanan) {
        echo "Makan : " . $makanan . "<br>";
        if ($minuman = $minuman) {
            echo "Minuman : " . $minuman . "<br>";
        }if ($cemilan = $cemilan) {
            echo "Cemilan : " . $cemilan . "<br>";
        }
    } else {
        echo "Anda tidak memesan,silahkan tukar uang anda dengan makanan dan minuman kami";
    }
});
// Route::get('/barang', function () {
//     $barang = App\Models\barang::all();
//     // return $barang;
//     return view('data_barang', compact('barang'));
// });
// Route::get('/pembelian', function () {
//     $pembelian = App\Models\pembelian::all();
//     // return $pembelian;
//     return view('pembelian', compact('pembelian'));
// });
Route::get('/barang', [BarangController::class, 'tampilkan']);
Route::get('/pembelian', [PembelianController::class, 'tampil']);
Route::get('/pembeli', [PembelisController::class, 'tampil']);
Route::get('/pesanan', [PesananController::class, 'tampil']);
Route::get('/suplier', [SuplierController::class, 'tampil']);

// Route::get('/pembeli', function () {
//     $pembelian = App\Models\pembeli::all();
//     // return $pembelian;
//     return view('pembeli', compact('pembelian'));
// });
// Route::get('/pesanan', function () {
//     $pesanan = App\Models\pesanan::all();
//     // return $pesanan;
//     return view('pesanan', compact('pesanan'));
// });
// Route::get('/suplier', function () {
//     $suplier = App\Models\suplier::all();
//     // return $pesanan;
//     return view('suplier', compact('suplier'));
// });
