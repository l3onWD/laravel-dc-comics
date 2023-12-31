@extends('layouts.main')

@section('page_title', 'Home')

@section('main-content')
    {{-- Home Section --}}
    <section id="comic" class="section text-center pb-5">

        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="DC Heroes" class="section-img mb-2">

        <div class="container py-5">

            <h2 class="mb-5">Welcome to DC Comics</h2>

            <a href="{{ route('comics.index') }}" class="btn btn-primary">VIEW CURRENT SERIES</a>

        </div>

    </section>
@endsection
