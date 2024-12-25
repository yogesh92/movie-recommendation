<?php

namespace App\Http\Controllers;

use App\Services\MovieService;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    protected $movieService;

    public function __construct(MovieService $movieService)
    {
        $this->movieService = $movieService;
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $movies = $this->movieService->searchMovies($query);

        return view('movies.search', ['movies' => $movies['results']]);
    }

    public function trending()
    {
        $movies = $this->movieService->getTrendingMovies();

        return view('movies.trending', ['movies' => $movies['results']]);
    }

    public function addToWatchlist(Request $request)
    {
    $request->validate([
        'movie_id' => 'required|integer',
    ]);

    $user = auth()->user();
    $user->watchlist()->attach($request->movie_id);

    return redirect()->back()->with('success', 'Movie added to your watchlist!');
    }
}