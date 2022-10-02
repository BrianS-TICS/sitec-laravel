<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MuroController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Auth\Events\Registered;
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

Route::get('/', [InicioController::class, 'index'])->name('inicio.index');
Route::post('/', [LoginController::class, 'store'])->name('inicio.store');

Route::get("/registro", [RegisterController::class, "index"])->name("registro");
Route::post("/registro", [RegisterController::class, "store"])->name("registro.post");

Route::get('/muro', [MuroController::class, 'index'])->name('muro.index');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
