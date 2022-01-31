@extends('layout.main')

@section('content')

    <div class="container">
        <div class="row">
            <h2>Create new Comic</h2>
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
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Comic Title</label>
                        <input type="text"
                            class="form-control @error('title') is-invalid @enderror"
                            name="title" id="title"
                            placeholder="Comic title"
                            value="{{ old('title') }}"
                            aria-describedby="validationServerFeedback01">
                        @error('title')
                            <p id="validationServerFeedback01" class="invalid-feedback">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Comic thumbnail</label>
                        <input type="text"
                            class="form-control @error('thumb') is-invalid @enderror"
                            name="thumb"
                            id="thumb"
                            placeholder="Comic thumb"
                            value="{{ old('thumb') }}" aria-describedby="validationServerFeedback02">
                        @error('thumb')
                            <p id="validationServerFeedback02" class="invalid-feedback">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Comic Price</label>
                        <input type="text"
                            class="form-control @error('price') is-invalid @enderror"
                            name="price"
                            id="price"
                            placeholder="Comic price"
                            value="{{ old('price') }}"
                            aria-describedby="validationServerFeedback03">
                        @error('price')
                            <p id="validationServerFeedback03" class="invalid-feedback">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text"
                            class="form-control @error('series') is-invalid @enderror"
                            name="series"
                            id="series"
                            placeholder="Comic series"
                            value="{{ old('series') }}"
                            aria-describedby="validationServerFeedback04">
                        @error('series')
                            <p id="validationServerFeedback04" class="invalid-feedback">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Start Sale</label>
                        <input type="text"
                            class="form-control @error('sale_date') is-invalid @enderror"
                            name="sale_date" id="sale_date"
                            placeholder="Comic sale_date"
                            value="{{ old('sale_date') }}"
                            aria-describedby="validationServerFeedback05">
                        @error('sale_date')
                            <p id="validationServerFeedback05" class="invalid-feedback">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Comic Type</label>
                        <input type="text"
                            class="form-control @error('type') is-invalid @enderror"
                            name="type" id="type"
                            placeholder="Comic type"
                            value="{{ old('type') }}"
                            aria-describedby="validationServerFeedback06">
                        @error('type')
                            <p id="validationServerFeedback06" class="invalid-feedback">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea for="description"
                            class="form-control @error('description') is-invalid @enderror"
                            name="description"
                            id="description"
                            cols="15"
                            rows="5"
                            aria-describedby="validationServerFeedback07"> {{ old('description') }} </textarea>
                        @error('description')
                            <p id="validationServerFeedback07" class="invalid-feedback">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-buttons">
                        <a href="{{ route('comics.index') }}">Back to List</a>
                        <button type="reset" class="btn btn-secondary m-2">Reset all Fields</button>
                        <button type="submit" class="btn btn-success m-2">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
