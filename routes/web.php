<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SplashController;

Route::get('/', [SplashController::class, 'index'])->name('splash.index');
Route::get('/splash', [SplashController::class, 'index'])->name('splash.page');
Route::get('/sibenka-frame', [SplashController::class, 'sibenkaFrame'])->name('sibenka.frame');
