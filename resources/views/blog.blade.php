<html>

<head>
    <title>Document</title>
</head>

<body>
    <center>
        <h2>Tampilkan data</h2>
    </center>
    <ul>
        @foreach ($data as $data2)
            Nis : {{ $data2['nis'] }} <br>
            Nama : {{ $data2['nama'] }} <br>
            Jenis Kelamin: {{ $data2['jeniskelamin'] }} <br>
            Kelas : {{ $data2['kelas'] }} <br>
            Alamat : {{ $data2['alamat'] }} <br>
            <hr>
        @endforeach
    </ul>
</body>

</html>
