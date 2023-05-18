<?php

namespace App\Http\Controllers\Pokemons;

use App\Http\Controllers\Controller;
use App\Http\Resources\PokemonDetailResource;
use App\Models\Pokemon;
use Illuminate\Http\Request;

class GetPokemonByIdController extends Controller
{
    public function __invoke($id)
    {
        $pokemon = Pokemon::with(['sprite', 'types', 'abilities'])->find($id);

        if (!$pokemon) {
            return response()->json(['error' => 'Pokemon not found'], 404);
        }

        return new PokemonDetailResource($pokemon);
    }
}
