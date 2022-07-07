@extends('layouts/admin')

@section('content')
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-12">
                <h3>Form Tambah Data Mahasiswa</h3>
                <form method="POST" action="{{ url('/update', $mahasiswa->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" value="{{ $mahasiswa->nim }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"  value="{{ $mahasiswa->nama }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"  value="{{ $mahasiswa->tanggal_lahir }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">IPK</label>
                        <input type="text" class="form-control" id="ipk" name="ipk"  value="{{ $mahasiswa->ipk }}">
                    </div>
                    <br /><br />
                    <button type="submit" class="btn btn-success">Edit</button>
                    <a href="/listmhs" class="btn btn-danger tbn-sm">Kembali</a></th>
                </form>
                </table>
            </div>
        </div>
    </div>
@endsection
