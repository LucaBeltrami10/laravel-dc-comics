<?php

use App\Http\Controllers\guest\ComicController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ComicController::class, 'index'])->name('guest.index');
Route::get('/create', [ComicController::class, 'create'])->name('guest.create');
Route::post('/', [ComicController::class, 'store'])->name('guest.store');
Route::get('/{id}', [ComicController::class, 'show'])->name('guest.show');
