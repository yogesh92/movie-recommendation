<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class MovieService
{
    private $baseUrl = 'https://api.themoviedb.org/3';
    private $apiKey;

    public function __construct()
    {
        $this->apiKey = env('TMDB_API_KEY');
    }

    public function searchMovies($query)
    {
        $response = Http::get("{$this->baseUrl}/search/movie", [
            'api_key' => $this->apiKey,
            'query' => $query,
        ]);

        return $response->json();
    }

    public function getTrendingMovies()
    {
        $response = Http::get("{$this->baseUrl}/trending/movie/week", [
            'api_key' => $this->apiKey,
        ]);

        return $response->json();
    }
}