<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // if (!Auth::check()) {
        //     return redirect('login');
        // }
        // $posts = Post::get();

        // $viewData = [
        //     'posts' => $posts
        // ];

        // return view('main-blog.home', $viewData);
        return view('main-blog.home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // if (!Auth::check()) {
        //     return redirect('login');
        // }
        return view('posts.post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // if (!Auth::check()) {
        //     return redirect('login');
        // }
        $userName = $request->input('username');
        $title = $request->input('title');
        $content = $request->input('content');

        Post::create([
            'username' => $userName,
            'title' => $title,
            'content' => $content,
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $name, string $id)
    {
        // if (!Auth::check()) {
        //     return redirect('login');
        // }

        $post = Post::where([
            ['id', '=', $id],
            ['username', '=', $name]
        ])->first();
        $comments = $post->comments()->get();
        $total_comments = $post->total_comments();

        $viewData = [
            'post' => $post,
            'comments' => $comments,
            'total_comments' => $total_comments
        ];

        return view('posts.show', $viewData);
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
