<section id="comics" class="section pb-5">

    <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="DC Heroes" class="section-img">

    <div class="container">

        <h2 class="section-title bg-blue">Current Series</h2>

        <div class="comics-deck">
            @foreach ($comics as $comic)
                @include('includes.components.comic_card', ['comic' => $comic])
            @endforeach
        </div>

        <div class="text-center mt-2">
            <button class="btn btn-primary">LOAD MORE</button>
        </div>
    </div>

</section>
