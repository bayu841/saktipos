<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'landingpage'])->name('landingpage');
Route::get('artikel',[IndexController::class,'artikel'])->name('artikel');
Route::get('detail', [IndexController::class, 'detailartikel'])->name('detailartikel');
Route::get('harga', [IndexController::class, 'harga'])->name('harga');
Route::get('faq', [IndexController::class, 'faq'])->name('faq');
Route::get('/login', [IndexController::class, 'login'])->name('login');
Route::get('/register', [IndexController::class, 'register'])->name('register');
