<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Validation controllo dati */

        /* $request->validate([
            'title' => 'required|min:5|max:100',
            'description' => 'required|min:10',
            'image' => 'required',
            'price' => 'required|max:50',
            'series' => 'required|max:100',
            'type' => 'required|max:100'
        ]); */
        /* Se una delle condizioni di sopra (guarda su) non viene rispettata, Laravel non procede con il codice di seguito */
        /* 2)Nella variabile $data richiamo il validation creato in fondo alla pagina per validazione dati */
        $data = $this->validation($request->all());
        $comic = new Comic();
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->image = $data['image'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->type = $data['type'];
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        /* $request->validate([
            'title' => 'required|min:5|max:100',
            'description' => 'required|min:10',
            'image' => 'required',
            'price' => 'required|max:50',
            'series' => 'required|max:100',
            'type' => 'required|max:100'
        ]); */
        $dataForm = $this->validation($request->all());
        $comic->update($dataForm);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }

    private function validation($data)
    {
        $validationResults = Validator::make($data, [
            'title' => 'required|min:5|max:100',
            'description' => 'required|min:10',
            'image' => 'required',
            'price' => 'required|max:50',
            'series' => 'required|max:100',
            'type' => 'required|max:100'
        ], [
            'title.required' => 'Il titolo ?? obbligatorio',
            'title.min' => 'Il titolo deve avere almeno :min caratteri',
            'title.max' => 'Il titolo deve superare i :max caratteri',
            'description.required' => 'La descrizione ?? necessaria',
            'image.required' => 'Copiare il link di un immagine',
            'price.required' => 'Inserire il prezzo',
            'series.required' => 'Inserire la serie specicifica',
            'type.require' => 'Inserire il genere'

        ])->validate();
        return $validationResults;
    }
}
