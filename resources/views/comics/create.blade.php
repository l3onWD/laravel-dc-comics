@extends('layouts.main')

@section('page_title', 'Create Comic')

@section('main-content')
    <section id="comics" class="section pb-5">

        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="DC Heroes" class="section-img">

        <div class="container py-5">

            {{-- Validation Messages --}}
            @include('includes.components.validation')

            <h2 class="mb-4">Add Comic</h2>

            {{-- Comic Form --}}
            @include('includes.components.comic_form', ['action' => route('comics.store')])

        </div>
    </section>
@endsection


@section('scripts')
    @vite('resources/js/comic-image-preview.js')
@endsection
