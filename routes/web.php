<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');


Route::get("/movies", [PageController::class, 'index'])->name('movies');
