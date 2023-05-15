<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\savedPost;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authUser = auth()->user();
        if (isset($authUser)) {
            $following = $authUser->following;
        } else {
            $following = null;
        }
        $savedPost = savedPost::with('post')->where('user_id', $authUser->id)->get();
        $posts = Post::get();
        $userPost = User::get();
        foreach ($posts as $value) {
            foreach ($userPost as $valueUser) {
                if ($valueUser['username'] == $value['username']) {
                    if ($value['category'] == 'News') {
                        $dataNews[] = [
                            'username' => $valueUser['username'],
                            'imgUserPost' => $valueUser['imgpp'],
                            'idPost' => $value['id'],
                            'thumbnailPost' => $value['thumbnail'],
                            'titlePost' => $value['title'],
                            'categoryPost' => $value['category'],
                        ];
                    }
                    if ($value['category'] == 'Pendidikan') {
                        $dataPendidikan[] = [
                            'username' => $valueUser['username'],
                            'imgUserPost' => $valueUser['imgpp'],
                            'idPost' => $value['id'],
                            'thumbnailPost' => $value['thumbnail'],
                            'titlePost' => $value['title'],
                            'categoryPost' => $value['category'],
                        ];
                    }
                    if ($value['category'] == 'Novel') {
                        $dataNovel[] = [
                            'username' => $valueUser['username'],
                            'imgUserPost' => $valueUser['imgpp'],
                            'idPost' => $value['id'],
                            'thumbnailPost' => $value['thumbnail'],
                            'titlePost' => $value['title'],
                            'categoryPost' => $value['category'],
                        ];
                    }
                    if ($value['category'] == 'Short Story') {
                        $dataCerpen[] = [
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
        }
        return view('main-blog.home', compact('following', 'savedPost' , 'dataNews', 'dataPendidikan', 'dataNovel', 'dataCerpen'));
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

        return redirect('user/@' . $name . '/profile');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $category, string $id)
    {
        if (!Auth::check()) {
            return redirect('home');
        }
        $post = Post::where([
            ['id', '=', $id],
            ['category', '=', $category]
        ])->first();
        $userPost = User::where('username', $post['username'])->first();
        $user = User::where('username', Auth::user()->username)->first();
        if($post->isSavedBy(Auth::user())){
            $isSaved = true;
        }else{
            $isSaved = false;
        }
        $savedByCount = $post->savedBy()->count();
        $user = Auth::user();
        $data = [
            'imgpp' => $userPost['imgpp'],
            'username' => $userPost['username'],
            'email' => $userPost['email'],
            'postId' => $post['id'],
            'title' => $post['title'],
            'created_at' => $post['created_at'],
            'thumbnail' => $post['thumbnail'],
            'description' => $post['description'],
            'category' => $post['category'],
            'isSaved' => $isSaved,

        ];
        return view('posts.show', compact('savedByCount' ,'data'));
    }

    public function save(string $postId)
    {
        $savedPost = savedPost::where('user_id', Auth::user()->id)
            ->where('post_id', $postId)
            ->first();
        if (!$savedPost) {
            $savedPost = savedPost::create([
                'user_id' => Auth::user()->id,
                'post_id' => $postId
            ]);
        }
        return redirect()->back();
    }

    public function unSave(string $postId){
        $savedPost = savedPost::where('user_id' , Auth::user()->id)
                ->where('post_id', $postId)
                ->first();

        if($savedPost){
            $savedPost->delete();
        }
        return redirect()->back();
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $name, string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $name, String $id)
    {
    }

    public function showCategory(string $category)
    {
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
    }


}
