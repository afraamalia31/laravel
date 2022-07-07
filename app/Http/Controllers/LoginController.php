<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $request->validate(['username' => 'required',
    ]);

    $validUsername = ['andi', 'tina'];

    if (in_array($request->username, $validUsername))
    {
        session(['username' => $request->username]);
        return redirect('/listmhs');
    }else {
        return back()->withInput()->with('pesan', "Username tidakvalid");
    }
    }

    public function Logout()
    {
        session()->forget('username');
        return redirect('login')->with('pesan', 'logoutberhasil');
    }
}
