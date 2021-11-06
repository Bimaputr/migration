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
                <th>id pembeli</th>
                <th>Nama</th>
                <th>jenis kelamin</th>
                <th>Alamat</th>
                <th>Kode pos</th>
                <th>Kota</th>
                <th>Tanggal lahir</th>
                </th>
                <ul>
                    @foreach ($pembeli as $data2)
            <tr>
                <td>{{ $data2['id_pembeli'] }}</td>
                <td>{{ $data2['nama'] }}</td>
                <td>{{ $data2['jns_kelamin'] }}</td>
                <td>{{ $data2['alamat'] }}</td>
                <td>{{ $data2['kode_pos'] }}</td>
                <td>{{ $data2['kota'] }}</td>
                <td>{{ $data2['tgl_lahir'] }}</td>
            </tr>
            @endforeach
        </table>
    </center>
    </ul>
</body>

</html>
