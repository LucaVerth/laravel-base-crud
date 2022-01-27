@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Comics List</h2>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"># ID</th>
                        <th scope="col">Title</th>
                        {{-- <th scope="col">Series</th> --}}
                        <th scope="col">Sale Date</th>
                        <th colspan="3" scope="col">Settings</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics_list as $comic)
                        <tr>
                            <th scope="row">{{$comic->id}}</th>
                            <td>{{$comic->title}}</td>
                            {{-- <td>{{$comic->series}}</td> --}}
                            <td>{{$comic->sale_date}}</td>
                            <td>
                                <a class="btn btn-success" href="{{route('comics.show', $comic)}}">Show</a>
                                <a class="btn btn-primary" href="#">Edit</a>
                                <a class="btn btn-danger" href="#">Delete</a>
                            </td>
                        </tr>
                    @empty

                    <h2>Nessun Risultato trovato</h2>

                    @endforelse
                </tbody>
            </table>
            {{$comics_list->links()}}
        </div>
    </div>
@endsection
