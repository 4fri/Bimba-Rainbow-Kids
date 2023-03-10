<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
Route::post('/register-save', [RegisterController::class, 'storeRegist'])->name('storeRegist');
// Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

Route::get('/', [HomeController::class, 'index'])->name('home');
