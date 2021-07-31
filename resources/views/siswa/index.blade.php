<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
</head>
<body>
    <h3>Data Siswa</h3>
    <br>
    <a href="{{ route('siswa.create') }}">Tambah Data Siswa</a>
    <br>
    <table>
        <thead>
            <th>#</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($siswa as $index => $item )
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item ->nama }}</td>
                <td>{{ $item ->tanggal_lahir }}</td>
                <td>{{ $item ->tempat_lahir }}</td>
                <td>{{ $item ->jenis_kelamin == "L" ? 'Laki-Laki' : 'Perempuan' }}</td>
                <td>{{ $item ->alamat }}</td>
                <td>
                    <a href="{{ route('siswa.edit', $item->id) }}">edit</a>
                    <form action="{{ route('siswa.destroy', $item->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
