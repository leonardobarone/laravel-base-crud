<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    protected $validationRules = [
        'title' => 'required|max:60',
        'description' => 'required',
        'thumb' => 'nullable|url',
        'price' => 'required|between:0,99.99',
        'series' => 'required|max:60',
        'type' => 'required|max:60',
        'sale_date' => 'required',
    ];

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

        // Validazione
        $request->validate($this->validationRules);

        $data = $request->all();
        
        // $newComic = new Comic();
        // $newComic->title = $data['title'];
        // $newComic->description = $data['description'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->type = $data['type'];
        // $newComic->save();

        // il MASS ASSIGMENT fa tutte le assegnazioni in automatico
        $newComic = Comic::create($data);
        
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // DEPENDENCY INJECTION COMIC $COMIC
    public function show(Comic $comic)
    {
        // $comic = Comic::find($id);

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
         // Validazione
         $request->validate($this->validationRules);


        $data = $request->all();
        $comic->update($data);

        return redirect()->route('comics.show', compact('comic'));
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
}


// try {
//   $comic->update($data);
// }
// catch(Exception $e) {
    // abort(404); || 500
// }