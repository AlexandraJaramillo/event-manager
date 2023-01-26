<?php
use App\Http\Controllers\PostController;

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventsController;

Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::view('/user', 'user')->name('user');
Route::view('/singleEvent', 'singleEvent')->name('singleEvent');
Route::view('/allEvents', 'allEvents')->name('allEvents');
//EVENTS

// //All Events
// Route::get('/', [EventsController::class, 'index']);

// //Show Create form
// Route::get('/eventsform', [EventsController::class, 'create'])->middleware('auth');

// //Store Event Data
// Route::post('/events', [EventsController::class, 'store'])->middleware('auth');

// //Show Edit Form
// Route::get('/events/{event}/edit', [EventsController::class, 'edit'])->middleware('auth');

// //Update Events
// Route::put('/events/{event}', [EventsController::class, 'update'])->middleware('auth');

// //Delete Events
// Route::delete('/events/{event}', [EventsController::class, 'destroy'])->middleware('auth');

// //Single Event
// Route::get('/events/{event}', [EventsController::class, 'show']);

// //USERS

// //Show Register/Create Form
// Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// //Create new User
// Route::post('/users', [UserController::class, 'store']);

// // Logout User
// Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// //Show Login Form
// Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// // Log in User
// Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// //Admin Route
// // Route::get('/admin', [AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');

// Route::middleware([AdminAuth::class])->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

// });










