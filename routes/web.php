<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MahasiswaController;

Route::get ('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get ('/mahasiswa/(id)',[MahasiswaController::class, 'show']);
Route::get ('/mahasiswa-create', [MahasiswaController::class, 'create']);
Route::post ('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.save');
Route::get ('/mahasiswa-edit', [MahasiswaController::class, 'edit']);