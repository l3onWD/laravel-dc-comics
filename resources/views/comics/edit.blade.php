@extends('layouts.main')

@section('page_title', 'Create Comic')

@section('main-content')
    <section id="comics" class="section pb-5">

        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="DC Heroes" class="section-img">

        <div class="container py-5">

            {{-- Validation Messages --}}
            @include('includes.components.validation')

            <h2 class="mb-4">Add Comic</h2>

            <form action="{{ route('comics.update', $comic) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" placeholder="Comic Title" value="{{ $comic->title }}">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                                rows="5">{{ $comic->description }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Image</label>
                            <input type="url" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                                name="thumb" placeholder="Comic Image Url" value="{{ $comic->thumb }}">
                            @error('thumb')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                                name="price" min="0" value="{{ $comic->price ?? '0' }}" step="0.01">
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="series" class="form-label">Series</label>
                            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"
                                name="series" placeholder="Comic Series" value="{{ $comic->series }}">
                            @error('series')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="sale-date" class="form-label">Sale Date</label>
                            <input type="date" class="form-control @error('sale_date') is-invalid @enderror"
                                id="sale-date" name="sale_date" value="{{ $comic->sale_date }}">
                            @error('sale_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type"
                                name="type" placeholder="Comic Type" value="{{ $comic->type }}">
                            @error('type')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="artists" class="form-label">Artists</label>
                            <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists"
                                name="artists" placeholder="Comic Artists" value="{{ $comic->artists }}">
                            @error('artists')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-5">
                            <label for="writers" class="form-label">Writers</label>
                            <input type="text" class="form-control @error('writers') is-invalid @enderror"
                                id="writers" name="writers" placeholder="Comic Writers"
                                value="{{ $comic->writers }}">
                            @error('writers')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 text-end">
                        <button class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    @endsection
