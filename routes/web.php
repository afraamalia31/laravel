<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/insertpost", [PostController::class, 'insertpost']);

Route::get("/listpost", [PostController::class, 'listpost']);

Route::get("/editpost", [PostController::class, 'editpost']);

Route::get("/deletepost", [PostController::class, 'deletepost']);

Route::get("/getpost", [PostController::class, 'getpost']);

Route::get("/insert", [PostController::class, 'insert']);

Route::get("/update", [PostController::class, 'update']);

Route::get("/delete", [PostController::class, 'delete']);

Route::get('/viewpost', function () {
    return view('viewpost');
});


Route::get('/about', function () {
    return '<h1>Halaman About</h1>';
});

Route::get('/datapribadi/{nama}', function ($nama) {
    return "Nama saya : $nama";
});

// Route::get('/datasiswa', function () {
//     return view('datasiswa', ["siswa1" => "Afra","siswa2" => "Lisa", "siswa3" => "Haruto", "siswa4" => "Asahi", ]);
// });

// Route::get('/datasiswa', function () {
//     return view('datasiswa');
// });

Route::get('/datasiswa', function () {
    return view('datasiswa', ["siswa" => ['Afra', 'Lisa', 'Haruto']]);
});

// Route::get("/siswa", function() {
//     return view('siswa', ['siswa' => 'Afra']);
// });

Route::get("/siswa", function () {
    return view('siswa', ['siswa' => 'Afra', 'nilai' => 95]);
});

Route::get("/loopfor", function () {
    return view('loopfor');
});
Route::get("/home", [PageController::class, 'index']);
Route::get("/tampil", [PageController::class, 'devfram']);
Route::get("/ujian", [PageController::class, 'hasilujian']);

Route::get('/reg',            [RegController::class, 'index']);
Route::post('/proses-reg', [RegController::class, 'prosesReg']);


// Praktikum 8

Route::get('/cek-objek', [MahasiswaController::class, 'cekObjek']);
Route::get('/insert', [MahasiswaController::class, 'insert']);

Route::get('/listmhs', [MahasiswaController::class, 'listmhs']);
Route::get('/form', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);

Route::get('/admin', [MahasiswaController::class, 'admin']);

Route::get('/edit/{mahasiswa:id}', [MahasiswaController::class, 'edit']);
Route::get('/edit', [MahasiswaController::class, 'edit']);

Route::get('/login', [LoginController::class, 'index']);

Route::post('/proses-login', [LoginController::class, 'prosesLogin']);
