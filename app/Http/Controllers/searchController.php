<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function ajax(Request $request, string $name)
    {
        if($name == 'blog'){
            $dataSearch = $request->name;
             $resultsBlog = Post::where('title', 'like', '%' . $dataSearch . '%')->get();
             $c = count($resultsBlog);
             if ($c == 0) {
                 return '<div class="card"><div id="judul"><h5 style="color: white;">Maaf Pencaharian mu tidak ada</h5></div></div>';
             } else {

                 return view('layouts.search')->with(['datas' => $resultsBlog]);
             }
        }else if($name == 'user'){
            $dataSearch = $request->name;
            $resultsUser = User::where('username', 'like', '%' . $dataSearch . '%')->get();
            $c = count($resultsUser);
            if ($c == 0) {
                return '<div class="card"><div id="judul"><h5 style="color: white;">Maaf Pencaharian mu tidak ada</h5></div></div>';
            } else {
                return view('layouts.search')->with(['datas' => $resultsUser]);
            }
        }
    }
    public function read(string $name)
    {
        if($name == 'blog'){
            return '<div class="card"><div id="judul"><h5>Mari mencari apa yang kamu inginkan</h5></div></div>';
        }else if($name == 'user'){
            return '<div class="card"><div class="messange"><div class="username"><p>Mari mencari apa yang kamu inginkan</p></div></div></div>';
        }
    }
}
