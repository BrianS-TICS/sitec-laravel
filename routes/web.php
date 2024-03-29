<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MuroController;
use App\Http\Controllers\SettingController;
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

// LOGIN
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'store'])->name('login.store');

// ALL THE USERS
// ROLLS | 1 = STUDENT | 2 = EMPLOYEE
Route::get("/register", [RegisterController::class, "index"])->name("register.index");
Route::post("/register", [RegisterController::class, "store"])->name("register.store");
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


Route::get('/configuracion', [SettingController::class, 'index'])->name('settings.index');
Route::post('/configuracion', [SettingController::class, 'store'])->name('settings.store');

Route::get('/muro/{user:numero_control}', [MuroController::class, 'index'])->middleware(['auth'])->name('muro.index');
