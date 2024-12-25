<h1>Search Results</h1>
<form action="{{ route('movies.search') }}" method="GET">
    <input type="text" name="query" placeholder="Search for a movie" required>
    <button type="submit">Search</button>
</form>

<ul>
    @foreach ($movies as $movie)
        <li>{{ $movie['title'] }} ({{ $movie['release_date'] ?? 'N/A' }})</li>
    @endforeach
</ul>