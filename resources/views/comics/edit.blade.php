@extends('layouts.app')

@section('title', 'Modifica')

@section('content')

    <div class="container">
        <h2>Modifica il singolo Comic : {{ $comic->title }}</h2>
        <div class="row justify-content-center mb-3">
            <div class="col-8">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="title">Titolo</label>
                        <input type="text" id="title" class="form-control" name="title" value="{{ $comic->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="description">Descrizione</label>
                        <textarea name="description" id="description" class="form-control" rows="10">{{ $comic->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image">Immagine</label>
                        <input type="text" id="image" class="form-control" name="image"
                            value="{{ $comic->image }}">
                    </div>
                    <div class="mb-3">
                        <label for="price">Prezzo</label>
                        <input type="text" id="price" class="form-control" name="price"
                            value="{{ $comic->price }}">
                    </div>
                    <div class="mb-3">
                        <label for="series">Serie</label>
                        <input type="text" id="series" class="form-control" name="series"
                            value="{{ $comic->series }}">
                    </div>
                    <div class="mb-3">
                        <label for="type">Tipologia</label>
                        <input type="text" id="type" class="form-control" name="type"
                            value="{{ $comic->type }}">
                    </div>

                    <button class="btn btn-success mt-3" type="submit">Salva</button>
                </form>
            </div>
        </div>
    </div>

@endsection
