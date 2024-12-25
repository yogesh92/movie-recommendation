<h1>Trending Movies</h1>
<ul>
    @foreach ($movies as $movie)
        <li>{{ $movie['title'] }} ({{ $movie['release_date'] ?? 'N/A' }})</li>
    @endforeach
</ul>