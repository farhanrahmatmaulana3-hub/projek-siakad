<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        {!! file_get_contents(public_path('css/export.css')) !!}
    </style>
    <title>pdf export</title>
</head>
<body>
    <h1>Data KRS</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama Mahasiswa</th>
                <th>Matakuliah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataKrs as $krs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $krs->npm }}</td>
                    <td>{{ $krs->mahasiswa ? $krs->mahasiswa->nama : '-' }}</td>
                    <td>{{ $krs->matakuliah ? $krs->matakuliah->nama_matakuliah : '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>