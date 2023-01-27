<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::view('/user', 'user')->name('user');
Route::view('/singleEvent', 'singleEvent')->name('singleEvent');
Route::view('/allEvents', 'allEvents')->name('allEvents');
