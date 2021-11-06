<html>

<head>
    <title>Document</title>
</head>

<body>
    <center>
        <h2>Tampilkan data</h2>
    </center>
    <ul>
        @foreach ($siswas as $data2)
            Id : {{ $data2['id'] }} <br>
            Nama : {{ $data2['nama'] }} <br>
            Username: {{ $data2['username'] }} <br>
            Email : {{ $data2['email'] }} <br>
            Alamat : {{ $data2['alamat'] }} <br>
            @foreach ($data2['mapel'] as $data3)
                <ul>
                    <li>{{ $data3 }}</li>
                </ul>
            @endforeach
            <hr>
        @endforeach
    </ul>
</body>

</html>
