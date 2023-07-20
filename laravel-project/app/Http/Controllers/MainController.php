<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//questo lo aggiungiamo noi chiaramente
use App\Models\Comic;

class MainController extends Controller
{
    public function index() {
        $comics = Comic :: all();

        return view("comic.index", compact("comics"));
    }

    public function show($id) {
        
        $comic = Comic :: findOrFail($id);

        return view("comic.show", compact("comic"));
    }

    public function create(){

        return view("comic.create");
    }

    public function store(Request $request){

        //dd($request);

        //questo sotto che ho commentato è senza validazione
        //$data = $request -> all();

        //qui aggiungo la validazione
        $data = $request -> validate([
            'title' => 'required|max:255',
           'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'required|max:255',
            'series' => 'required|max:255',
            'sale_date' => 'required|max:255',
            'type'=> 'required|max:255',
        ]);

        //dd($data);

        //così creo l'elemento e lo inserisco nel DB, ricorda un po il seeder questo blocco di codice
        $newComic = Comic :: create([
            'title'  => $data["title"],
            'description' => $data["description"],
            'thumb' => $data["thumb"],
            'price' => $data["price"],
            'series' => $data["series"],
            'sale_date' => $data["sale_date"],
            'type' => $data["type"],
        ]);

        //return view("comic.store");
        return redirect() -> route("comic.show", $newComic -> id);
    }

    public function edit($id) {

        $comic = Comic :: findOrFail($id);

        return view("comic.edit", compact("comic"));
    }

    public function update(Request $request, $id) {
        
        
        //questo sotto che ho commentato è senza validazione
        //$data = $request -> all();

        //qui aggiungo la validazione
        $data = $request -> validate([
            'title' => 'required|max:255',
           'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'required|max:255',
            'series' => 'required|max:255',
            'sale_date' => 'required|max:255',
            'type'=> 'required|max:255',
        ]);

        $comic = Comic :: findOrFail($id);

        $comic -> update($data);

        return redirect() -> route('comic.show', $comic -> id);

    }

    public function delete($id) {

        $comic = Comic :: findOrFail($id);

        $comic -> delete();

        return redirect() -> route('comic.index');

    }
}


