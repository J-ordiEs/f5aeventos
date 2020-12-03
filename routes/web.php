<?php

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

Route::get('/', function () {
    return view('events.events');
});

Route::get('/event/{id}', function ($id) {
    return $id;
});

Route::get('/createEvent', function () {
    return view('events.createEvent');
});

Route::get('/editEvent', function () {
    return view('events.editEvent');
});

Auth::routes();

Route::get('/', [\App\Http\Controllers\EventsController::class, 'index'])->name('events');
Route::get('/events/{id}', [\App\Http\Controllers\EventsController::class, 'indexEvent'])->name('events.event');
Route::post('/createEvent', [\App\Http\Controllers\EventsController::class, 'store'])->name('events.store')->middleware('auth');
Route::put('/events/{id}', [\App\Http\Controllers\EventsController::class, 'update'])->name('events.update');
Route::delete('/events/{id}', [\App\Http\Controllers\EventsController::class, 'destroy'])->name('events.delete')->middleware('auth');

