<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>
<body>

    <h1>Data Siswa</h1>
    <ul>
        @foreach ($siswa as $item)
            <li> {{ $item }}</li>
        @endforeach
    </ul>

</body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Siswa</title>
</head>
<body>
<h1>Daftar Siswa</h1>
<ol>
    <li> echo $siswa1; ?></li>
    <li>< echo $siswa2; ?></li>
    <li>< echo $siswa3; ?></li>
    <li><p echo $siswa4; ?></li>
</ol>
</body>
</html>
<h1>Menampilkan View</h1> --}}
