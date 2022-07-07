<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Mahasiswa;
use Illuminate\Validation\Rules\Unique;
use Symfony\Contracts\Service\Attribute\Required;

use function PHPUnit\Framework\returnSelf;

class MahasiswaController extends Controller
{
    public function cekObjek()
    {
        $mahasiswa = new Mahasiswa;

        dump($mahasiswa);
    }

    public function insert()
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = '20014546';
        $mahasiswa->nama = 'Haruto Watanabe';
        $mahasiswa->tanggal_lahir = '2004-04-05';
        $mahasiswa->ipk = 3.5;
        $mahasiswa->save();

        dump($mahasiswa);
    }

    public function listmhs()
    {
        $result = DB::table('mahasiswas')->get();
        return view('v_mahasiswa', ['mahasiswa' => $result]);
    }

    public function create()
    {
        $result = DB::table('mahasiswa')->get();
        return view('v_form', ['mahasiswa' => $result]);
    }

    public function store()
    {
        Mahasiswa::create([
            'nim' => request('nim'),
            'nama' => request('nama'),
            'tanggal_lahir' => request('tanggal_lahir'),
            'ipk' => request('ipk', 1.00)
        ]);

        return redirect()->back();
    }

    public function admin()
    {
        return view('layouts/admin');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('v_edit', compact('mahasiswa'));
    }

    public function update(Mahasiswa $mahasiswa)
    {
        $mahasiswa->update([
            'nim' => request('nim'),
            'nama' => request('nama'),
            'tanggal_lahir' => request('tanggal_lahir'),
            'ipk' => request('ipk', 1.00),
        ]);
        return redirect('v_mahasiswa');

    }
}
