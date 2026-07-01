<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KRSController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('/mahasiswa', MahasiswaController::class);
Route::resource('/dosen', DosenController::class);
Route::resource('/matakuliah', MataKuliahController::class);
Route::resource('/jurusan', JurusanController::class);
Route::resource('/kelas', KelasController::class);
Route::resource('/krs', KRSController::class);

Route::get('/register', [AuthController::class, 'registerView'])
    ->name('register.view');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register');

Route::get('/login', [AuthController::class, 'loginView'])
    ->name('login.view');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');