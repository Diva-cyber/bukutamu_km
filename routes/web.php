<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatatamuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
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

// Route::get('/', function () {
//     return view('kerangka.master');
// });

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/log', [LoginController::class, 'login'])->name('login.store');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/regist', [RegisterController::class, 'store'])->name('register.store');

//datatamu
Route::get('data-datatamu', [DatatamuController::class, 'index'])->name('datatamu.index');
Route::get('create-datatamu', [DatatamuController::class, 'create'])->name('datatamu.create');
Route::post('/datatamu', [DatatamuController::class, 'store'])->name('datatamu.store');
Route::get('/datatamus/{datatamu}/edit', [DatatamuController::class, 'edit'])->name('datatamu.edit');
Route::patch('datatamu/{id}/update', [DataTamuController::class, 'update'])->name('datatamu.update');
Route::delete('/datatamus/{datatamu}', [DatatamuController::class, 'destroy'])->name('datatamu.destroy');

//datasiswa
Route::get('/datasiswa', [SiswaController::class, 'index'])->name('datasiswa.index');
Route::get('/datasiswa/create', [SiswaController::class, 'create'])->name('datasiswa.create');
Route::post('/datasiswa', [SiswaController::class, 'store'])->name('datasiswa.store');
Route::get('/datasiswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('datasiswa.edit');
Route::put('/datasiswa/{siswa}', [SiswaController::class, 'update'])->name('datasiswa.update');
Route::delete('/datasiswa/{id}', [SiswaController::class, 'destroy'])->name('datasiswa.destroy');


