<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

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
        //
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

         //validazione a insrimento dati da gui
         $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string|min:1',
            'thumb' => 'required',
            'series' => 'required|string|max:50',
            'price' => 'required|numeric',
            'sale_date' => 'required',
            'type' => 'required|string|max:50',
        ]);

        $data = $request->all();
        //dd($data);
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.show', compact('comic'));
    }

    /**
     * Display the specified resource.
     * 
     *  **posso passare la variabile $comic al posto dell'id**
     * @param  Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //se passo come parametro l'id utilizzo la funzione sotto
        //$comic = Comic::findOrFail($id); 
        //dd($comic);
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
        //dump($comic);

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
        //validazione a insrimento dati da gui
        $request->validate([
            'title' => ' required|string|min:5|max:100',
            'description' => ' required|string|min:1',
            'thumb' => ' required',
            'series' => ' required|string|min:5|max:50',
            'price' => ' required|numeric',
            'sale_date' => ' required',
            'type' => ' required|string|min:5|max:50',
        ]);


        $data = $request->all();
        $comic->update($data);

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

        return redirect()->route('comics.index')->with('message', "$comic->title eliminato con successo");
    }
}
