<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            border: 1px solid #543535;
        }
    </style> 
    <title>Cetak Data UKM</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Daftar UKM</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
        </tr>
        @foreach ($data as $ukm)
        <tr>
            <td>{{ $ukm->id }}</td>
            <td>{{ $ukm->nama }}</td>
            <td>{{ $ukm->deskripsi }}</td>
        </tr>
        @endforeach
    </table>
    </div>
</body>
</html>