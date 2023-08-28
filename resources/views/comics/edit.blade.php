@extends('layouts.main')

@section('page_title', 'Create Comic')

@section('main-content')
    <section id="comics" class="section pb-5">

        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="DC Heroes" class="section-img">

        <div class="container py-5">

            <h2 class="mb-4">Add Comic</h2>

            <form action="{{ route('comics.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Comic Title" value="{{ $comic->title }}">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="5">{{ $comic->description }}</textarea>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Image</label>
                            <input type="url" class="form-control" id="thumb" name="thumb"
                                placeholder="Comic Image Url" value="{{ $comic->thumb }}">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" min="0"
                                value="{{ $comic->price ?? '0' }}" step="0.01">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="series" class="form-label">Series</label>
                            <input type="text" class="form-control" id="series" name="series"
                                placeholder="Comic Series" value="{{ $comic->series }}">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="sale-date" class="form-label">Sale Date</label>
                            <input type="date" class="form-control" id="sale-date" name="sale_date"
                                value="{{ $comic->sale_date }}">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="type" name="type"
                                placeholder="Comic Type" value="{{ $comic->type }}">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="artists" class="form-label">Artists</label>
                            <input type="text" class="form-control" id="artists" name="artists"
                                placeholder="Comic Artists" value="{{ $comic->artists }}">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-5">
                            <label for="writers" class="form-label">Writers</label>
                            <input type="text" class="form-control" id="writers" name="writers"
                                placeholder="Comic Writers" value="{{ $comic->writers }}">
                        </div>
                    </div>

                    <div class="col-12 text-end">
                        <button class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    @endsection
