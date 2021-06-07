<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('users/{id}', [UserController::class, 'index'])->name('user.index');

Route::post('/logout', [LogoutController::class,'store'])->name('logout');


Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/posts', [PostController::class, 'index'])->name('posts');

Route::get('/',function (){
    return view('posts.home');
})->name('home');