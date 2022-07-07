@extends('layouts/admin')

@section('content')

<div class="container-fluid">
    <div class="row-sm-12 content">
        <div class="col-sm-5 sidenav">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#section1">Mahasiswa</a></li>
                </ul><br>
            </div>
            <div class="col-sm-12">
                <table class="table caption-top">
                    <h3>List of mahasiswa</h3>
                    <a href="/form" class="btn btn-success">Tambah Mahasiswa</a>
                    <br/> <br/>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">IPK</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $mhs)
                            <tr>
                                <td scope="row">{{ $mhs->id }}</td>
                                <td scope="row">{{ $mhs->nim }}</td>
                                <td scope="row">{{ $mhs->nama }}</td>
                                <td scope="row">{{ $mhs->tanggal_lahir }}</td>
                                <td scope="row">{{ $mhs->ipk }}</td>
                                <td scope="row">
                                    <a href="edit/{{ $mhs->id }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</html>
@endsection
