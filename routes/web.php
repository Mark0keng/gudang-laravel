<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;


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

// Barang
Route::get('/barang', 'App\Http\Controllers\StoreController@index')->middleware('auth');
Route::get('/barang/add', 'App\Http\Controllers\StoreController@create');
Route::get('/barang/{store}', 'App\Http\Controllers\StoreController@show');
Route::post('/barang', 'App\Http\Controllers\StoreController@store');
Route::delete('/barang/{store}', 'App\Http\Controllers\StoreController@destroy');
Route::get('/barang/edit/{store}', 'App\Http\Controllers\StoreController@edit');
Route::patch('/barang/{store}', 'App\Http\Controllers\StoreController@update');

// Route::resource('store', 'StoreControlller');

// Login 
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'create']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
