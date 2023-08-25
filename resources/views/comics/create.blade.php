@extends('layouts.main')

@section('page_title', 'Create Comic')

@section('main-content')
    <section id="comics" class="section pb-5">

        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="DC Heroes" class="section-img">

        <div class="container py-5">

            <h2 class="mb-4">Add Comic</h2>

            <form action="" method="GET">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Comic Title">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Image</label>
                            <input type="url" class="form-control" id="thumb" name="thumb"
                                placeholder="Comic Image Url">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" min="0"
                                value="0" step="0.01">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="series" class="form-label">Series</label>
                            <input type="text" class="form-control" id="series" name="series"
                                placeholder="Comic Series">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="sale-date" class="form-label">Sale Date</label>
                            <input type="date" class="form-control" id="sale-date" name="sale_date">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="type" name="type"
                                placeholder="Comic Type">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="artists" class="form-label">Artists</label>
                            <input type="text" class="form-control" id="artists" name="artists"
                                placeholder="Comic Artists">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-5">
                            <label for="writers" class="form-label">Writers</label>
                            <input type="text" class="form-control" id="writers" name="writers"
                                placeholder="Comic Writers">
                        </div>
                    </div>

                    <div class="col-12 text-end">
                        <button class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    @endsection
