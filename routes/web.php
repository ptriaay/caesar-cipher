<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CipherController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenggunaController;

Route::get('/putri', [CipherController::class, 'index']);
Route::post('/putri/encrypt', [CipherController::class, 'encrypt']);

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


Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'prosesLogin']);




Route::get('/daftar_pengguna', [PenggunaController::class, 'index']);
Route::get('/tambah_pengguna', [PenggunaController::class, 'create']);
Route::post('/store', [PenggunaController::class, 'store']);
Route::get('/edit/{id}', [PenggunaController::class, 'edit']);
Route::post('/update/{id}', [PenggunaController::class, 'update']);
Route::get('/delete/{id}', [PenggunaController::class, 'destroy']);

Route::get('/logout', [AuthController::class, 'logout']);
