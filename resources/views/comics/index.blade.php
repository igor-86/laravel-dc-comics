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
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </section>
@endsection
