<?php
use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [EventsController::class, 'index']);
Route::get('/events/{event}', [EventsController::class, 'show']);
Route::get('/eventsform', [EventsController::class, 'create']);
Route::post('/events', [EventsController::class, 'store']);


// Route::get('/home/{post}', [PostController::class, 'show']);
// Route::view('/event', 'event');
// Route::view('/register', 'register');
// Route::view('/login', 'login');
// Route::view('/profile', 'profile');
// Route::view('/adminprofile', 'adminprofile');
