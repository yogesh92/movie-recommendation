@extends('layouts.app')

@section('title', 'Search Movies')

@section('content')
<div class="card">
    <div class="card-body">
        <h1 class="card-title">Search Movies</h1>
        <form action="{{ route('movies.search') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="query" class="form-control" placeholder="Search for a movie" required>
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>

        @if(isset($movies) && count($movies) > 0)
            <ul class="list-group">
                @foreach ($movies as $movie)
                    <li class="list-group-item">
                        <h5>{{ $movie['title'] }}</h5>
                        <p>{{ $movie['overview'] }}</p>
                        <small class="text-muted">Release Date: {{ $movie['release_date'] ?? 'N/A' }}</small>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-muted">No movies found.</p>
        @endif
    </div>
</div>
@endsection