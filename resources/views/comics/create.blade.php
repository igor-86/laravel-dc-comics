@extends('layouts.app')

@section('title', 'Crea nuovo')

@section('content')
    <section>
        <div class="container">
            <h2 class="text-center mt-3">Crea nuovo Comics</h2>
            <div class="form">
                <div class="row justify-content-center">
                    {{-- Se ci sono errori stampali sullo schermo --}}
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            Stampo lista errori con cliclo foreach
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    <div class="col-8">
                        <form action="{{ route('comics.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="title">Titolo</label>
                                <input type="text" class="form-control mt-1 @error('title') is-invalid @enderror"
                                    id="title" name="title" placeholder="Scrivi qui">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description">Descrizione</label>
                                <textarea name="description" id="description" rows="10" placeholder="Scrivi qui"
                                    class="form-control @error('description') is-invalid @enderror"></textarea>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="image">Link Immagine</label>
                                <input type="text" class="form-control mt-1 @error('image') is-invalid @enderror"
                                    id="image" name="image" placeholder="Copia link immagine">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price">Prezzo</label>
                                <input type="text" class="form-control mt-1 @error('price') is-invalid @enderror"
                                    id="price" name="price" placeholder="Scrivi qui">
                                @error('price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="series">Serie</label>
                                <input type="text" class="form-control mt-1 @error('series') is-invalid @enderror"
                                    id="series" name="series" placeholder="Scrivi qui">
                                @error('series')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="type">Tipologia</label>
                                <input type="text" class="form-control mt-1 @error('type') is-invalid @enderror"
                                    id="type" name="type" placeholder="Scrivi qui">
                                @error('type')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button class="btn btn-success mt-2 mb-3" type="submit">Salva</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
