<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JajananController;
use App\Http\Controllers\AuthController;

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

Route::resource('jajanans', JajananController::class);
Route::get('/jajanans', [JajananController::class, 'index'])->name('jajanans.index');
Route::get('/jajanans/{id}', [JajananController::class, 'show'])->name('products.show');
Route::get('/jajanans/{id}', [JajananController::class, 'show'])->name('products.show');