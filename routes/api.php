<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CinestarController;

Route::controller(CinestarController::class)->group(function(){
    Route::get('cines', 'cines');
    Route::get('cine/{id}', 'cine');
    Route::get('peliculas', 'peliculas');
    Route::get('pelicula/{id}', 'pelicula');
} );