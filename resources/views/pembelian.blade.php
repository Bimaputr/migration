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
                <th>id pembelian</th>
                <th>Nama barang</th>
                <th>Nama suplier</th>
                <th>quantity</th>
                <th>Tgl</th>
                </th>
                <ul>
                    @foreach ($pembelian as $data2)
            <tr>
                <td>{{ $data2['id_pembelian'] }}</td>
                <td>{{ $data2['nama_barang'] }}</td>
                <td>{{ $data2['nama_supllier'] }}</td>
                <td>{{ $data2['qty'] }}</td>
                <td>{{ $data2['tgl'] }} </td>
                <hr>
            </tr>
            @endforeach
        </table>
    </center>
    </ul>
</body>

</html>
