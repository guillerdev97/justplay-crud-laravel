<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\EventsController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', [Eventscontroller::class, 'index'])->name('eventsApi');

//delete
Route::delete('/deleteEvent/{id}', [Eventscontroller::class, 'destroy'])->name('deleteEventApi');

//create
// Route::get('/create', [EventsController::class, 'create'])->name('createEventApi');