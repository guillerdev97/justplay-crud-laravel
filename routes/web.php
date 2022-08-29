<?php

use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();

Route::get('/', [EventsController::class, 'index']);
Route::get('/home', [EventsController::class, 'index'])->name('home');
Route::get('/past', [EventsController::class, 'getPastEvents'])->name('pastEvents');

// delete
Route::delete('/delete/{id}', [EventsController::class, 'destroy'])->name('delete')->middleware('isadmin', 'auth');

// create
Route::get('/create', [EventsController::class, 'create'])->name('createEvent')->middleware('isadmin', 'auth');
Route::post('/', [EventsController::class, 'store'])->name('storeEvent')->middleware('isadmin', 'auth');

//edit
Route::get('/edit/{id}', [EventsController::class, 'edit'])->name('editEvent')->middleware('isadmin', 'auth');
Route::patch('/update/{id}', [EventsController::class, 'update'])->name('updateEvent')->middleware('isadmin', 'auth');

// show
Route::get('/show/{id}', [EventsController::class, 'show'])->name('showEvent');
