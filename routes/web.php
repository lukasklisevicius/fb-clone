<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/users/{user:name}/posts', [UserPostController::class, 'index'])->name('users.posts')->middleware('auth');

Route::get('users/{id}', [UserController::class, 'index'])->name('user.index')->middleware('auth');

Route::post('/logout', [LogoutController::class,'store'])->name('logout');


Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/posts', [PostController::class, 'index'])->name('posts')->middleware('auth');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show')->middleware('auth');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit')->middleware('auth');
Route::post('/posts/{post}/edit', [PostController::class, 'update'])->name('edit');


Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes')->middleware('auth');

Route::post('/comment/{post}',[CommentController::class, 'store'])->name('comment');

Route::get('profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');
Route::post('/profile',[UserController::class, 'update'])->name('profile');


Route::get('search', [SearchController::class, 'index'])->name('search')->middleware('auth');

Route::get('/',function (){
    return view('posts.home');
})->name('home');