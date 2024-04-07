<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('photos', App\Http\Controllers\photosController::class);
Route::resource('photoDetails', App\Http\Controllers\photo_detailsController::class);
Route::resource('users', App\Http\Controllers\usersController::class);
Route::resource('rols', App\Http\Controllers\RolController::class);
Route::resource('users', App\Http\Controllers\UserController::class);