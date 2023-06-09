<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('register.login.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('home');
        } else {
            $request->validate([
                'email' => 'required|email:dns',
                'password' => 'required'
            ]);
            return redirect('register/login')->with('error_message', 'Cek Kembali ya');
        }
    }

    public function logout()
    {
        if (!Auth::check()) {
            return redirect('home');
        }
        session()->flush();
        Auth::logout();

        return redirect('home');
    }

    public function change()
    {
        if (!Auth::check()) {
            return redirect('home');
        }
        session()->flush();
        Auth::logout();
        return redirect('register/login');
    }

    public function register_form()
    {
        return view('register.sign-up.signUp');
    }

    public function register(Request $request)
    {
        $validateData =  $request->validate([
            'username' => 'required|unique:users',
            'image' => 'image|mimes:jpg,jpeg,png|file|max:1024',
            'name' => 'required|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('user-pp');
        }else{
            $validateData['image'] = null;
        }

        User::create([
            'username' => $validateData['username'],
            'imgpp' => $validateData['image'],
            'name' => $validateData['name'],
            'email' => $validateData['email'],
            'password' => Hash::make($validateData['password']),
        ]);
        return view('register.login.login');
    }
}
