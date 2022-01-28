@extends('layout.main')

@section('content')

    <div class="container">
        <div class="row">
            <h2>Edit Comic: {{ $comic->title }}</h2>
        </div>
        <div class="row my-3">
            <div class="col-8">
                <form action="{{ route('comics.update', $comic) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Comic Title</label>
                        <input type="text" value="{{ $comic->title }}" class="form-control" name="title" id="title"
                            placeholder="Comic title">
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Comic thumbnail</label>
                        <input type="text" value="{{ $comic->thumb }}" class="form-control" name="thumb" id="thumb"
                            placeholder="Comic thumb">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Comic Price</label>
                        <input type="text" value="{{ $comic->price }}" class="form-control" name="price" id="price"
                            placeholder="Comic price">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" value="{{ $comic->series }}" class="form-control" name="series" id="series"
                            placeholder="Comic series">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Start Sale</label>
                        <input type="text" value="{{ $comic->sale_date }}" class="form-control" name="sale_date"
                            id="sale_date" placeholder="Comic sale_date">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Comic Type</label>
                        <input type="text" value="{{ $comic->type }}" class="form-control" name="type" id="type"
                            placeholder="Comic type">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea for="description" class="form-control" name="description" id="description" cols="15"
                            rows="5"> {{ $comic->description }} </textarea>
                    </div>
                    <div class="form-buttons">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-success">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
