<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies/search', [MovieController::class, 'search'])->name('movies.search');
Route::get('/movies/trending', [MovieController::class, 'trending'])->name('movies.trending');

Route::post('/watchlist/add', [MovieController::class, 'addToWatchlist'])->middleware('auth')->name('watchlist.add');
Route::get('/watchlist', [MovieController::class, 'viewWatchlist'])->middleware('auth')->name('watchlist.view');