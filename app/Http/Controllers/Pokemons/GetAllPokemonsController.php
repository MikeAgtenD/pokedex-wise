<?php

namespace App\Http\Controllers\Pokemons;

use App\Http\Controllers\Controller;
use App\Http\Resources\PokemonResource;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Validation\Rule;

/**
 * @group Pokemons
 *
 * API endpoints for managing pokémons
 *
 * @responseScenario 200 scenarios/getAllPokemons.json
 */

class GetAllPokemonsController extends Controller
{
    /**
     * Get all pokemons
     *
     * Fetch a list of all available pokemons.
     * The list can be sorted using the optional 'sort' query parameter.
     * Available options for sorting are: 'name-asc', 'name-desc', 'id-asc', 'id-desc'
     *
     * @queryParam sort string The sorting criteria. Example: name-asc
     *
     * @responseField data[] object The list of pokemons
     * @responseField data[].id int The ID of the pokemon
     * @responseField data[].name string The name of the pokemon
     * @responseField data[].sprites object The sprites of the pokemon
     * @responseField data[].types[] object The types of the pokemon
     *
     * @return AnonymousResourceCollection
     */
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
