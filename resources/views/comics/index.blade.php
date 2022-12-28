@extends('layouts.app')

@section('title', 'Lista Comics')

@section('content')
    <section class="bg-dark text-light">
        <div class="container py-3">
            <h2 class="text-center">Lista Comics disponibili in magazzino</h2>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="news text-end mt-3">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Add New Comics</a>
            </div>
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">Titolo</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Serie</th>
                        <th scope="col">Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->title }}</th>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ route('comics.show', $comic->id) }}">View</a>
                                <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>

                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn"
                                        data-comic-title="{{ $comic->title }}">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </section>
    @include('partials.modal')
@endsection
