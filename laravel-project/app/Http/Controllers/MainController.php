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

        $data = $request -> all();

        //dd($data);

        //così creo l'elemento, ricorda un po il seeder questo blocco di codice
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
}


