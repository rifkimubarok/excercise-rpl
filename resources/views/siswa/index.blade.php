<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Siswa</title>
</head>
<body>
    <h4>List Siswa</h4>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($siswa as $item)
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$item->nis}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->tmp_lahir}}</td>
                    <td>{{$item->tgl_lahir}}</td>
                    <td><a href="{{route("siswa.edit", $item->id)}}"><button>Edit</button></a></td>
                </tr>
                @php
                    $no++;
                @endphp
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="{{route("siswa.create")}}"><button>Tambah Data</button></a>
</body>
</html>