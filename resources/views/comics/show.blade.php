@extends('layouts.main')

@section('page_title', 'Comic')

@section('main-content')
    {{-- Comic Section --}}
    <section id="comic" class="section bg-white text-dark">

        {{-- Page Image --}}
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="DC Heroes" class="section-img">


        {{-- Comic Image --}}
        <header class="bg-blue">
            <div class="container py-1">

                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="comic-image">

                {{-- Top Nav --}}
                <nav class="comic-navigation">
                    <ul>
                        <li>
                            @isset($prev)
                                <a href="{{ route('comics.show', $prev) }}">
                                    <i class="fas fa-angle-left"></i>
                                    Previous Comic
                                </a>
                            @endisset
                        </li>
                        <li>
                            @isset($next)
                                <a href="{{ route('comics.show', $next) }}">
                                    Next Comic
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            @endisset
                        </li>
                    </ul>
                </nav>
            </div>
        </header>


        {{-- Comic Info --}}
        <div class="container comic-info py-5">

            {{-- Data --}}
            <div>
                {{-- Actions --}}
                <div class="d-flex py-2 mb-3">
                    <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning me-2">Edit</a>
                    <form method="POST" action="{{ route('comics.destroy', $comic) }}" class="delete-form"
                        data-name="{{ $comic->title }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>

                {{-- Title --}}
                <h2 class="mb-3">{{ $comic->title }}</h2>

                {{-- Disponibility --}}
                <div class="comic-disponibility text-right mb-2">

                    {{-- Price --}}
                    <p class="text-left">U.S. Price: <span class="text-white">${{ $comic->price }}</span></p>

                    {{-- Status --}}
                    <p class="px-2">AVAILABLE</p>

                    {{-- Actions --}}
                    <div class="text-white ">
                        @include('includes.components.dropmenu', ['dropmenu' => $comic_actions_dropmenu])
                    </div>

                </div>

                {{-- Description --}}
                <p>{{ $comic->description }}</p>

            </div>

            {{-- Adv --}}
            <aside class="text-right">
                <h3 class="mb-0">ADVERTISEMENT</h3>
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="adv">
            </aside>

        </div>


        {{-- Comic Details --}}
        <div class="comic-details bg-lightgray py-5">
            <div class="container">

                {{-- Talent --}}
                <div>
                    <h3>Talent</h3>
                    <ul>
                        <li>
                            <p class="comic-details-title">Art by:</p>
                            <p class="comic-details-value">{{ $comic->artists }}</p>
                        </li>
                        <li>
                            <p class="comic-details-title">Written by:</p>
                            <p class="comic-details-value">{{ $comic->writers }}</p>
                        </li>
                    </ul>
                </div>

                {{-- Specs --}}
                <div>
                    <h3>Specs</h3>
                    <ul>
                        <li>
                            <p class="comic-details-title">Series:</p>
                            <p class="comic-details-value">
                                <a href="#">{{ $comic->series }}</a>
                            </p>
                        </li>
                        <li>
                            <p class="comic-details-title">U.S. Price:</p>
                            <p class="comic-details-value">${{ $comic->price }}</p>
                        </li>
                        <li>
                            <p class="comic-details-title">On Sale Date::</p>
                            <p class="comic-details-value">{{ date('M d Y', strtotime($comic->sale_date)) }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        {{-- Bottom Nav --}}
        <nav class="cta-nav bg-lightgray">
            <ul class="container">
                <li>
                    <a href="#">
                        <h4>Digital Comics</h4>
                        <div class="cta-icon cta-digital"></div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <h4>Shop DC</h4>
                        <div class="cta-icon cta-shop"></div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <h4>Comic Shop Locator</h4>
                        <div class="cta-icon cta-locator"></div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <h4>Subscriptions</h4>
                        <div class="cta-icon cta-subscriptions"></div>
                    </a>
                </li>
            </ul>
        </nav>

    </section>

@endsection


@section('scripts')
    @vite('resources/js/modal-delete.js')
@endsection
