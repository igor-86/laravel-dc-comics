@extends('layouts.app')

@section('title', 'Specifiche prodotto')

@section('content')

    <section>
        <div class="container">
            <h2>Lista Comics</h2>
            <div class="info mt-4">
                @if (!empty($comic->image))
                    <img src="{{ $comic->image }}" alt="">
                @else
                    <p>Immagine non trovata</p>
                @endif
            </div>
            <div class="info mt-2">
                <h2>{{ $comic->title }} - Tipo: {{ $comic->type }}</h2>
            </div>
            <div class="text">
                <span>Descrizione:</span>
                <p>
                    {{ $comic->description }}
                </p>
            </div>
        </div>
    </section>

@endsection
