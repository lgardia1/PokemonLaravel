<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Exception;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Pokemon.index", ['pokemons' => $pokemons = Pokemon::orderBy("id")->get(),]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view("Pokemon.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:100|unique:pokemon,name',
            'weight' => 'required|numeric|min:0',
            'height' => 'required|numeric|min:0',
            'evolution' => 'nullable|integer|min:0|max:4',
            'type' => 'required|in:water,ground,rock,fire,grass,electric,psychic,ice,dragon,dark,fairy'
        ]);

        try{
            Pokemon::create($request->all());
            return redirect('pokemon/')->with(['message' => 'The pokemon has been created']);
        }catch (\Exception $e) {
            return back()->withInput()->withErrors(['message' => 'The pokemon is not create']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pokemon $pokemon)
    {
        return view("pokemon.show", ['pokemon' => $pokemon]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pokemon $pokemon)
    {
       return view('Pokemon.edit', ['pokemon'=>$pokemon]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pokemon $pokemon)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:100|unique:pokemon,name,'.$pokemon->id,
            'weight' => 'required|numeric|min:0',
            'height' => 'required|numeric|min:0',
            'evolution' => 'nullable|integer|min:0|max:4',
            'type' => 'required|in:water,ground,rock,fire,grass,electric,psychic,ice,dragon,dark,fairy'
        ]);

        try {
            $pokemon->update($request->all());
            return redirect('pokemon/')->with(['message' => 'The pokemon has been created']);
        }catch(\Exception $e) {
            return back()->withInput()->withErrors(['message' => 'The pokemon is not create']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pokemon $pokemon)
    {
        try {
            $pokemon->delete();
            return redirect('pokemon/')->with(['message' => 'The pokemon has been deleted.']);
        } catch(\Exception $e) {
             return back()->withErrors(['message' => 'The pokemon has not been deleted.']);
        }
    }
}
