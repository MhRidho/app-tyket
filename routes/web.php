<?php

use App\Http\Controllers\TiketController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\TransaksiController;
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

Route::resource('/ticket', TiketController::class);
Route::resource('/transaksi', TransaksiController::class);
Route::resource('/buyer', BuyerController::class);
Route::get('/login', [BerandaController::class, 'login'])->name('login');
