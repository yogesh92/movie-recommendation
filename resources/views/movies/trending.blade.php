@extends('layouts.app')

@section('title', 'Trending Movies')

@section('content')
<h1 class="mb-4">Trending Movies</h1>
<div class="row">
    @foreach ($movies as $movie)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" class="card-img-top" alt="{{ $movie['title'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie['title'] }}</h5>
                    <p class="card-text">{{ Str::limit($movie['overview'], 100) }}</p>
                    <p class="text-muted">Release Date: {{ $movie['release_date'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection