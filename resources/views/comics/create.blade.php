@extends('layouts.main')

@section('page_title', 'Create Comic')

@section('main-content')
    <section id="comics" class="section pb-5">

        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="DC Heroes" class="section-img">

        <div class="container py-5">

            {{-- Validation Messages --}}
            @include('includes.components.validation')

            <h2 class="mb-4">Add Comic</h2>

            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title"
                                name="title" placeholder="Comic Title" value="{{ old('title') }}">
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
                                rows="5">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <div class="row">

                                {{-- url --}}
                                <div class="col-10">
                                    <label for="thumb" class="form-label">Image</label>
                                    <input type="url" class="form-control @error('thumb') is-invalid @enderror"
                                        id="thumb" name="thumb" placeholder="Comic Image Url"
                                        value="{{ old('thumb') }}">
                                    @error('thumb')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Preview --}}
                                <div class="col-2">
                                    <img id="preview-image"
                                        src="{{ old('thumb', 'https://marcolanci.it/utils/placeholder.jpg') }}"
                                        alt="preview" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                                name="price" min="0" value="{{ old('price', '0') }}" step="0.01">
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
                                name="series" placeholder="Comic Series" value="{{ old('series') }}">
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
                                id="sale-date" name="sale_date" value="{{ old('sale_date') }}">
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
                                name="type" placeholder="Comic Type" value="{{ old('type') }}">
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
                                name="artists" placeholder="Comic Artists" value="{{ old('artists') }}">
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
                                id="writers" name="writers" placeholder="Comic Writers" value="{{ old('writers') }}">
                            @error('writers')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 text-end">
                        <button class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection


@section('scripts')
    @vite('resources/js/comic-image-preview.js')
@endsection
