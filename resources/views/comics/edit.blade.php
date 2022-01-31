@extends('layout.main')

@section('content')

    <div class="container">
        <div class="row">
            <h2>Edit Comic: {{ $comic->title }}</h2>
        </div>
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row my-3">
            <div class="col-8">
                <form action="{{ route('comics.update', $comic) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Comic Title</label>
                        <input type="text" value="{{ old('title', $comic->title) }}"
                            class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                            placeholder="Comic title">
                        @error('title')
                            <p id="validationServerEdit01" class="invalid-feedback">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Comic thumbnail</label>
                        <input type="text" value="{{ old('thumb', $comic->thumb) }}"
                            class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb"
                            placeholder="Comic thumb">
                        @error('thumb')
                            <p id="validationServerEdit02" class="invalid-feedback">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Comic Price</label>
                        <input type="text" value="{{ old('price', $comic->price) }}"
                            class="form-control @error('price') is-invalid @enderror" name="price" id="price"
                            placeholder="Comic price" aria-describedby="validationServerEdit03">
                        @error('price')
                            <p id="validationServerEdit03" class="invalid-feedback">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" value="{{ old('series', $comic->series) }}"
                            class="form-control @error('series') is-invalid @enderror" name="series" id="series"
                            placeholder="Comic series">
                        @error('series')
                            <p id="validationServerEdit04" class="invalid-feedback">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Start Sale</label>
                        <input type="text" value="{{ old('sale_date', $comic->sale_date) }}"
                            class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date"
                            placeholder="Comic sale_date">
                        @error('title')
                            <p id="validationServerEdit05" class="invalid-feedback">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Comic Type</label>
                        <input type="text" value="{{ old('type', $comic->type) }}"
                            class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                            placeholder="Comic type">
                        @error('type')
                            <p id="validationServerEdit06" class="invalid-feedback">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea for="description" class="form-control @error('description') is-invalid @enderror"
                            name="description" id="description" cols="15"
                            rows="5"> {{ old('description', $comic->description) }} </textarea>
                        @error('description')
                            <p id="validationServerEdit07" class="invalid-feedback">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-buttons">
                        <a href="{{ route('comics.show', $comic->id) }}">Back to Comic</a>
                        <button type="reset" class="btn btn-secondary m-2">Reset all Fields</button>
                        <button type="submit" class="btn btn-success m-2">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
