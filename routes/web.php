<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get("/", [MainController::class,"main"])->name("main");

Route::get('login', [MainController::class, 'login'])-> name('login');

Route::get('logout', [MainController::class, 'logout'])-> name('logout');

Route::resource('pokemon', PokemonController::class);