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
                <th>id suplier</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kode pos</th>
                <th>Kota</th>
                </th>
                <ul>
                    @foreach ($suplier as $data2)
            <tr>
                <td>{{ $data2['id_suplier'] }}</td>
                <td>{{ $data2['nama'] }}</td>
                <td>{{ $data2['alamat'] }}</td>
                <td>{{ $data2['kode_pos'] }}</td>
                <td>{{ $data2['kota'] }} </td>
            </tr>
            @endforeach
        </table>
    </center>
    </ul>
</body>

</html>
