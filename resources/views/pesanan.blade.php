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
                <th>id pesanan</th>
                <th>Nama pelanggan</th>
                <th>Nama barang</th>
                <th>quantity</th>
                <th>Tanggal pesan</th>
                </th>
                <ul>
                    @foreach ($pesanan as $data2)
            <tr>
                <td>{{ $data2['id_pesanan'] }}</td>
                <td>{{ $data2['nama_pelanggan'] }}</td>
                <td>{{ $data2['nama_barang'] }}</td>
                <td>{{ $data2['qty'] }}</td>
                <td>{{ $data2['tgl_pesanan'] }} </td>
            </tr>
            @endforeach
        </table>
        <center>
            </ul>
</body>

</html>
