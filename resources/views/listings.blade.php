<h1>{{ $heading }}</h1>

@unless(count($listings) == 0)
    @foreach ($listings as $listing)
        <h2>{{ $listing['title'] }}</h2>
        <a href="/listings/{{ $listing['id'] }}">Listing Id {{ $listing['id'] }}</a>
        <p>{{ $listing['description'] }}</p>
    @endforeach
@else
    <p>No listings</p>
@endunless
