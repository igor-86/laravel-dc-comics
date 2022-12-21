@extends('layouts.app')

@section('title', 'Crea nuovo')

@section('content')
    <section>
        <div class="container">
            <h2 class="text-center mt-3">Crea nuovo Comics</h2>
            <div class="form">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <form action="" method="">
                            <div class="mb-3">
                                <label for="title">Titolo</label>
                                <input type="text" class="form-control mt-1" id="title" name="title"
                                    placeholder="Scrivi qui">
                            </div>
                            <div class="mb-3">
                                <label for="description">Descrizione</label>
                                <textarea name="description" id="description" rows="10" placeholder="Scrivi qui" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image">Link Immagine</label>
                                <input type="text" class="form-control mt-1" id="image" name="image"
                                    placeholder="Copia link immagine">
                            </div>
                            <div class="mb-3">
                                <label for="price">Prezzo</label>
                                <input type="text" class="form-control mt-1" id="price" name="price"
                                    placeholder="Scrivi qui">
                            </div>
                            <div class="mb-3">
                                <label for="series">Serie</label>
                                <input type="text" class="form-control mt-1" id="series" name="series"
                                    placeholder="Scrivi qui">
                            </div>
                            <div class="mb-3">
                                <label for="type">Tipologia</label>
                                <input type="text" class="form-control mt-1" id="type" name="type"
                                    placeholder="Scrivi qui">
                            </div>
                            <button class="btn btn-success mt-2 mb-3" type="submit">Salva</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
