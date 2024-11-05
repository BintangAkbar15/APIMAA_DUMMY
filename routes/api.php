<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\AktifitasController;

Route::middleware(['auth:sanctum'])->group(function () {
    
});

Route::apiResource('karyawan',KaryawanController::class);
Route::apiResource('presensi',PresensiController::class);
Route::apiResource('aktifitas',AktifitasController::class);
Route::post('/login',[AuthController::class,'login']);
Route::post('/logout',[AuthController::class,'logout']);