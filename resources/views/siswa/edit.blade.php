<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Siswa</title>
</head>
<body>
    <h4>Tambah Siswa</h4>
    <br>
    <form action="{{route("siswa.edit", $siswa->id)}}" method="post">
        @csrf
        <table>
            <tr>
                <td>NIS</td>
                <td><input type="number" name="nis" id="nis" value="{{$siswa->nis}}"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama" value="{{$siswa->nama}}"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tmp_lahir" id="tmp_lahir" value="{{$siswa->tmp_lahir}}"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir" id="tgl_lahir" value="{{$siswa->tgl_lahir}}"></td>
            </tr>
        </table>
        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>