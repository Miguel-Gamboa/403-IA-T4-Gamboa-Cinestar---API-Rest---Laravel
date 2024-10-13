<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CinestarController;

Route::get('/', [CinestarController::class, 'index']);
Route::get('/cines', [CinestarController::class, 'cines'])->name('cines');
Route::get('/cines/{slug}', [CinestarController::class, 'cine'])->name('cine');
Route::get('/peliculas/{id}', [CinestarController::class, 'peliculas'])->name('peliculas');
Route::get('/pelicula/{id}', [CinestarController::class, 'pelicula'])->name('pelicula');