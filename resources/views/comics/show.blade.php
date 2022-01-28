@extends('layout.main')

@section('content')

    <div class="container">
        <div class="row">
            <h2>Comic Details</h2>

        </div>
        <span>
            <a class="btn btn-primary my-2" href="{{route('comics.edit', $comic)}}">EDIT</a>
         </span>
        <div class="row">
            <ul class="list-group">
                <li class="list-group-item">Comic Title: {{$comic['title']}}</li>
                <li class="list-group-item">Comic Slug: {{$comic['slug']}}</li>
                <li class="list-group-item">Comic thumbnail: {{$comic['thumb']}}</li>
                <li class="list-group-item">Comic Price: {{$comic['price']}}</li>
                <li class="list-group-item">Comic Series: {{$comic['series']}}</li>
                <li class="list-group-item">Comic Sale Date: {{$comic['sale_date']}}</li>
                <li class="list-group-item">Comic Type: {{$comic['type']}}</li>
                <li class="list-group-item">Comic Descpription: {{$comic['description']}}</li>
            </ul>
        </div>
        <a class="btn btn-primary mt-4" href="{{url()->previous()}}">Back to Comics List</a>
    </div>
@endsection
