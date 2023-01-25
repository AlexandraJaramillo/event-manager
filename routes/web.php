<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::view('/user', 'user')->name('user');
