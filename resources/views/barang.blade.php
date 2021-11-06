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

    <center>
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
            <tr>
                <td>{{ $data2['id_barang'] }}</td>
                <td>{{ $data2['nama'] }}</td>
                <td>{{ $data2['varian'] }}</td>
                <td>{{ $data2['harga_beli'] }}</td>
                <td>{{ $data2['harga_jual'] }}</td>
            </tr>
            @endforeach
            </ul>
    </center>
    </table>
</body>

</html>
