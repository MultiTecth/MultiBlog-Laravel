<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\Users;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('ajax/{name}', [searchController::class, 'ajax']);
Route::get('read/{name}', [searchController::class, 'read']);

Route::get('/', function () {
    return redirect('home');
});

Route::get('register/login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('register/signup', [AuthController::class, 'register_form']);
Route::post('register', [AuthController::class, 'register']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('changeAcc', [AuthController::class, 'change']);
Route::post('follow/{id}', [Users::class, 'follow']);
Route::delete('unfollow/{id}', [Users::class, 'unfollow']);

Route::get('register/login', function () {
    return view('register.login.login');
});

Route::get('home/about', function () {
    return view('main-blog.about');
});

Route::get('home/{name}', [PostController::class, 'showCategory']);

Route::get('user/@{name}/profile', [Users::class, 'show']);
Route::get('user/@{name}/edit-profile', [Users::class, 'show_profile']);
Route::patch('user/@{name}/edit-profile', [Users::class, 'edit_profile']);


Route::get('home', [PostController::class, 'index']);

Route::get('upload/blog', [PostController::class, 'create']);
Route::post('@{name}/upload/blog', [PostController::class, 'store']);

Route::get('tweet/{category}/{id}', [PostController::class, 'show']);
Route::post('tweet/{username}/save', [PostController::class, 'save']);
Route::delete('tweet/{id}/unsave', [PostController::class, 'unSave']);
