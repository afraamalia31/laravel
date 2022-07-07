<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class RegController extends Controller
{
    public function index(){
        return view('form-daftar');
    }

    public function prosesReg(Request $request){
        echo $request->nim;                echo "<br>";
        echo $request->nama;               echo "<br>";
        echo $request->email;              echo "<br>";
        echo $request->jenis_kelamin;      echo "<br>";
        echo $request->jurusan;            echo "<br>";
        echo $request->alamat;

        // validasi
        $validateData = $request->validate([
            'nim'   => 'required|size:8',
            'nama'  => 'required|min:3|max:50',
            'email' => 'required|email',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => ''
        ]);

        dump ($validateData);

        echo $validateData['nim'];                 Echo "<br>";
        echo $validateData['nama'];                Echo "<br>";
        echo $validateData['email'];               Echo "<br>";
        echo $validateData['jenis_kelamin'];       Echo "<br>";
        echo $validateData['jurusan'];             Echo "<br>";
        echo $validateData['alamat'];
    }
}
