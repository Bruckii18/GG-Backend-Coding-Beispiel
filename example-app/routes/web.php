<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/api/airline', [App\Http\Controllers\AirlineController::class, 'create'])->name('airlines.create');
Route::get('/api/airlines', [App\Http\Controllers\AirlineController::class, 'showAll'])->name('airlines.showAll');
Route::get('/api/airlines/{id}', [App\Http\Controllers\AirlineController::class, 'showId'])->name('airlines.showId');
Route::put('/api/airlines/{id}', [App\Http\Controllers\AirlineController::class, 'update'])->name('airlines.update');
Route::get('/api/passengers/{id}', [App\Http\Controllers\AirlineController::class, 'getPassengersOfAirline'])->name('airline.getPassengers');