<a href="{{ route('comics.show', $comic->id) }}" class="comic-card">
    <figure class="card-img">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    </figure>
    <h4 class="mt-2">{{ $comic->title }}</h4>
</a>
