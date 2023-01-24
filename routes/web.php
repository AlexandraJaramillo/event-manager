<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventsController;

//EVENTS

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

//USERS

//Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);

//Create new User
Route::post('/users', [UserController::class, 'store']);

// Logout User
Route::post('/logout', [UserController::class, 'logout']);

//Show Login Form
Route::get('/login', [UserController::class, 'login']);

// Log in User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);









