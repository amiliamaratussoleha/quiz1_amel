<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kampus;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kampus', [Kampus::class, 'index'])
    ->middleware('auth')
    ->name('kampus');

Route::get('/tentang', [Kampus::class, 'tentang'])
    ->middleware('auth')
    ->name('tentang');

Route::get('/program-studi', [Kampus::class, 'programStudi'])
    ->middleware('auth')
    ->name('program-studi');

Route::get('/fasilitas', [Kampus::class, 'fasilitas'])
    ->middleware('auth')
    ->name('fasilitas');

Route::get('/kontak', [Kampus::class, 'kontak'])
    ->middleware('auth')
    ->name('kontak');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
