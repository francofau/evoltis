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



Auth::routes(['register' => false]);

Route::get('/', [App\Http\Controllers\CochController::class, 'index']);

Route::resource('coches', App\Http\Controllers\CochController::class);
Route::resource('propietarios', App\Http\Controllers\PropietarioController::class);

Route::get('/home', [App\Http\Controllers\CochController::class, 'index'])->name('home');
