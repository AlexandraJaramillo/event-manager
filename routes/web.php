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
//All Events
Route::get('/', [EventsController::class, 'index']);

//Show Create form
Route::get('/eventsform', [EventsController::class, 'create']);

//Store Event Data
Route::post('/events', [EventsController::class, 'store']);

//Show Edit Form
Route::get('/events/{event}/edit', [EventsController::class, 'edit']);

//Update Events
Route::put('/events/{event}', [EventsController::class, 'update']);

//Delete Events
Route::delete('/events/{event}', [EventsController::class, 'destroy']);

//Single Event
Route::get('/events/{event}', [EventsController::class, 'show']);








