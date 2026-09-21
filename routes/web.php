<?php

use Illuminate\Support\Facades\Route;

Route::get('/kampus', [App\Http\Controllers\Kampus::class, 'index']);