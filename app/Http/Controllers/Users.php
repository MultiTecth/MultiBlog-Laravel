<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\savedPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $name)
    {
        if (!Auth::check()) {
            return redirect('home');
        }
        $posts = Post::where('username', $name)
            ->get();
        $user = User::where('username', $name)->first();
        $authUser = User::findOrFail(Auth::user()->id);
        $following = $authUser->isFollowing($user);
        $followers = $user->followers;
        $savedPost = savedPost::with('post')->where('user_id', $user->id)->get();
        return view('main-blog.user', compact('posts', 'user', 'following', 'followers', 'savedPost'));
    }

    public function follow(Request $request, int $id)
    {
        $user = $request->user();
        $followedUser = User::findOrFail($id);
        $user->follow($followedUser);
        return redirect()->back();
    }

    public function unfollow(Request $request, $id)
    {
        $user = $request->user();
        $followedUser = User::findOrFail($id);

        $user->unfollow($followedUser);

        return redirect()->back();
    }

    public function show_profile(string $name)
    {
        if (!Auth::check()) {
            return redirect('home');
        }
        $user = User::where('username', $name)
            ->first();

        $viewData = [
            'data' => $user
        ];

        return view('main-blog.edituser', $viewData);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_profile(string $name, Request $request)
    {
        if (!Auth::check()) {
            return redirect('home');
        }
        $validate =  [
            'username' => 'required',
            'imgpp' => 'image|mimes:jpg,jpeg,png|file|max:1024',
            'name' => 'required',
            'email' => 'required|email:dns',
        ];

        if ($request->input('bio') != null) {
            $validate['bio'] = '';
        }

        $validData = $request->validate($validate);

        if (Hash::check($request->input('curpass'), Auth::user()->password)) {
            if ($request->validate(['newpass' => 'required|min:6|confirmed'])) {
                $validData['password'] = hash::make($request->input('newpass'));
            }
        }

        if ($request->file('imgpp')) {
            if ($request->input('oldImage')) {
                Storage::delete($request->input('oldImage'));
            }
            $validData['imgpp'] = $request->file('imgpp')->store('user-pp');
        }

        $validData['updated_at'] = date('Y-m-d H:i:s');

        User::where([
            ['username', $name]
        ])
            ->update($validData);

        return redirect('user/@' . $name . '/profile');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
