@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Comics List</h2>
        </div>
        <div class="row">
            <a class="btn btn-primary my-2" href="{{ route('comics.create') }}">Add New Comic</a>
        </div>
        <div class="row">
            <div class="col-12">
                @if (session('delete'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('delete') }}
                    </div>
                @endif
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"># ID</th>
                        <th scope="col">Title</th>
                        {{-- <th scope="col">Series</th> --}}
                        <th scope="col">Sale Date</th>
                        <th colspan="2" scope="col">Settings</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics_list as $comic)
                        <tr>
                            <th scope="row">{{ $comic->id }}</th>
                            <td>{{ $comic->title }}</td>
                            {{-- <td>{{$comic->series}}</td> --}}
                            <td>{{ $comic->sale_date }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ route('comics.show', $comic) }}">Show</a>
                            </td>
                            <td>
                                <form onsubmit="return confirm('Confirm you wanna delete the following {{ $comic->title }} ?')" action="{{ route('comics.destroy', $comic) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty

                        <h2>Nessun Risultato trovato</h2>

                    @endforelse
                </tbody>
            </table>
            {{ $comics_list->links() }}
        </div>
    </div>
@endsection
