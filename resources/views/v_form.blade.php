@extends('layouts/admin')

@section('content')
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav">

                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#section1">Mahasiswa</a></li>
                </ul><br />
            </div>
            <div class="col-sm-12">
                <h3>Form Tambah Data Mahasiswa</h3>
                <form method="POST" action="/mahasiswa">
                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">IPK</label>
                        <input type="text" class="form-control" id="ipk" name="ipk">
                    </div>
                    <br /><br />
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="/listmhs" class="btn btn-danger tbn-sm">Kembali</a></th>
                </form>
                </table>
            </div>
        </div>
    </div>


    </html>
@endsection
