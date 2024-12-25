<h1>Your Watchlist</h1>
<ul>
    @foreach ($watchlist as $movie)
        <li>{{ $movie->title }} ({{ $movie->release_date }})</li>
    @endforeach
</ul>