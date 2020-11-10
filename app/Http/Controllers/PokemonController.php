<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PokemonController extends Controller
{
    public function index()
    {
        $data = Pokemon::all();
        return view('pages/myPokemons', compact('data'));
    }
    public function create()
    {
        return view('pages/createPokemons');
    }

    public function store(Request $request)
    {
        $img = $request->file('img');
        $newImage = Storage::disk('public')->put('', $img);
        
        $newEntry  = new Pokemon;

        $newEntry->nom = $request->nom;
        $newEntry->type = $request->type;
        $newEntry->niveau = $request->niveau;
        $newEntry->image = $newImage;
        $newEntry->save();
        return redirect()->back();
    }
    public function destroy($id)
    {
        $newDelete = Pokemon::find($id);
        $newDelete->delete();
        return redirect()->back();
    }
}
