<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PostModel;

class PostController extends Controller
{
   
    public function inserpost(){
        $result = DB::insert("INSERT INTO posts (judul,isi) value ('Testing judul', 'Testing isi')");
        dump($result);
    }

    public function listpost(){
        $result = DB::select("SELECT * FROM posts");
        echo 'Judul Berita: ' . $result[0]. '<br>';
        echo 'Isi Berita: ' . $result[0]->isi . '<br>';
    }

    public function editpost(){
        $result = DB::update("UPDATE post SET judul = 'Ubah Judul Baru', isi = 'Ubah isi baru' WHERE id = 1");
        dump($result);
    }

    public function deletepost(){
        $result = DB::delete("DELETE FROM posts WHERE id = 1");
        dump($result);
    }

    public function getpost(){
        $result = DB::table('posts')->get();
        return view('viewpost', ['posts' => $result]);
    }

    public function insert(){
        $result = DB::table('posts')->insert(
            [
                'judul' => 'Treasure',
                'isi' => 'Treasure maker fo treasure'
            ]
    );
    dump($result);
    }

    public function update(){
        $result = DB::table('posts')
        ->where('id', 3)
        ->update(
            [
                'judul' => 'Treasure Collection',
                'isi' => 'New Merch Treasure Collection'
            ]
        );
        dump($result);
    }

    public function delete(){
        $result = DB::table('posts')
        ->where('id', 3)
        ->delete();
        dump($result);
    }

}

