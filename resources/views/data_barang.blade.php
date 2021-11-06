<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menampilkan Data Barang</title>
</head>

<body>
    <center>
        <h2>Tampilkan data</h2>
    </center>
    <table border=1>
            <tr>
                <th>id barang</th>
                <th>Nama</th>
                <th>varian</th>
                <th>Harga beli</th>
                <th>Harga jual</th>
                </th>
    <ul>
        @foreach ($barang as $data2)
            id barang : {{ $data2['id_barang'] }} <br>
            Nama : {{ $data2['nama'] }} <br>
            varian: {{ $data2['varian'] }} <br>
            Harga beli : {{ $data2['harga_beli'] }} <br>
            Harga jual : {{ $data2['harga_jual'] }} <br>
            <hr>
        @endforeach
    </ul>
</body>

</html>
