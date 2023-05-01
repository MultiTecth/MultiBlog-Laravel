<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use PDO;
use PhpParser\Node\Expr\Cast\String_;
use Ramsey\Uuid\Type\Integer;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::get();
        $userPost = User::get();
        foreach ($posts as $value) {
            foreach ($userPost as $valueUser) {
                if ($valueUser['username'] == $value['username']) {
                    $dataPosUser[] = [
                        'username' => $valueUser['username'],
                        'imgUserPost' => $valueUser['imgpp'],
                        'idPost' => $value['id'],
                        'thumbnailPost' => $value['thumbnail'],
                        'titlePost' => $value['title'],
                        'categoryPost' => $value['category'],
                    ];
                }
            }
        }
        $datas = [
            'values' => $dataPosUser
        ];
        // ddd($dataNovel);
        return view('main-blog.home', $datas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check()) {
            return redirect('home');
        }
        return view('posts.post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(string $name, Request $request)
    {
        if (!Auth::check()) {
            return redirect('home');
        }
        $validate = $request->validate([
            'title' => 'required',
            'thumbnail' => 'image|mimes:jpg,jpeg,png|file|max:1024',
            'description' => 'required',
            'category' => 'required'
        ]);

        if ($request->file('thumbnail')) {
            $validate['thumbnail'] = $request->file('thumbnail')->store('thumbnail/@' . $name);
        } else {
            $validate['thumbnail'] = null;
        }

        $validate['username'] = $name;

        Post::create($validate);

        return redirect('user/@' . $name);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $category, string $id)
    {
        // if (!Auth::check()) {
        //     return redirect('login');
        // }
        $post = Post::where([
            ['id', '=', $id],
            ['category', '=', $category]
        ])->first();

        $userPost = User::where('username', $post['username'])->first();

        $data = [
            'imgpp' => $userPost['imgpp'],
            'username' => $userPost['username'],
            'email' => $userPost['email'],
            'title' => $post['title'],
            'created_at' => $post['created_at'],
            'thumbnail' => $post['thumbnail'],
            'description' => $post['description'],
            'category' => $post['category']
        ];

        // $comments = $post->comments()->get();
        // $total_comments = $post->total_comments();

        // $viewData = [
        //     'post' => $post,
        //     'comments' => $comments,
        //     'total_comments' => $total_comments
        // ];

        return view('posts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $name, string $id)
    {
        // if (!Auth::check()) {
        //     return redirect('login');
        // }

        $post = Post::where([
            ['id', '=', $id],
            ['username', '=', $name]
        ])->first();

        $viewData = [
            'post' => $post
        ];

        return view('posts.edit', $viewData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $name, String $id)
    {
        // if (!Auth::check()) {
        //     return redirect('login');
        // }
        $username = $request->input('username');
        $title = $request->input('title');
        $content = $request->input('content');

        Post::where([
            ['id', $id],
            ['username', $name]
        ])
            ->update([
                'username' => $username,
                'title' => $title,
                'content' => $content,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        return redirect("posts/{$username}/{$id}");
    }

    public function showCategory(string $category){
        $posts = Post::where('category', $category)->get();
        $viewDatas = [
            'posts' => $posts
        ];
        return view('main-blog.homeCategory.category', $viewDatas);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $name, string $id)
    {
        // if (!Auth::check()) {
        //     return redirect('login');
        // }

        Post::where([
            ['id', $id],
            ['username', $name]
        ])
            ->delete();


        return redirect('posts');
    }
}