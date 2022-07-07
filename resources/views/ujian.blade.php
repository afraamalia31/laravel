<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<body>
    <h1>Data Ujian Siswa</h1>
    <hr>
    <h3>Nama Peserta Ujian : {{ $siswa }}</h3>
    <h3>Nilai Ujian : {{ $nilai }}</h3>
    <h3>Anda dinyatakan :
        @if ($nilai>70)
        LULUS
        @else
        TIDAK LULUS
        @endif
</body>
</html>