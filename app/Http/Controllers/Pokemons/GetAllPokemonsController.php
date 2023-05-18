<?php

namespace App\Http\Controllers\Pokemons;

use App\Http\Controllers\Controller;
use App\Http\Resources\PokemonResource;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GetAllPokemonsController extends Controller
{
    //TODO:: implement SCRIBE as open source package to document the api endpoints
    public function __invoke(Request $request)
    {
        $request->validate([
            'sort' => [
                'nullable',
                Rule::in(['name-asc', 'name-desc', 'id-asc', 'id-desc']),
            ],
        ]);

        $sort = $request->get('sort');

        //Eager loading
        $query = Pokemon::with(['sprite', 'types', 'abilities']);

        if ($sort) {
            [$column, $direction] = explode('-', $sort);
            $query->orderBy($column, $direction);
        }

        $pokemons = $query->get();

        return PokemonResource::collection($pokemons);
    }
}
