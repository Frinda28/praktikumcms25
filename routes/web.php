<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;


Route::get('/pengguna', [PenggunaController::class, 'index']);
Route::get('/pengguna/create', [PenggunaController::class, 'create']);
Route::post('/pengguna', [PenggunaController::class, 'store']);
Route::get('/pengguna/{id}/edit', [PenggunaController::class, 'edit']);
Route::post('/pengguna/{id}/update', [PenggunaController::class, 'update']);
Route::get('/pengguna/{id}/hapus', [PenggunaController::class, 'destroy']); // <- INI WAJIB ADA
