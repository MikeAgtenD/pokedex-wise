<?php

namespace App\Http\Controllers\Pokemons;

use App\Http\Controllers\Controller;
use App\Http\Resources\PokemonDetailResource;
use App\Models\Pokemon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @group Pokemons
 *
 * API endpoints for managing pokemons
 *
 */

class GetPokemonByIdController extends Controller
{
    /**
     * Get pokemon by id
     *
     * Fetch details of a pokemon with the specified ID.
     *
     * @urlParam id required int The ID of the pokemon to fetch
     *
     * @responseField data object The details of the pokemon
     * @responseField data.id int The ID of the pokemon
     * @responseField data.name string The name of the pokemon
     * @responseField data.sprite object The sprites of the pokemon
     * @responseField data.types[] object The types of the pokemon
     *
     * @responseScenario 404 scenarios/pokemonNotFound.json
     *
     * @param  int  $id
     * @return JsonResponse|PokemonDetailResource
     */
    public function __invoke($id)
    {
        $pokemon = Pokemon::with(['sprite', 'types', 'abilities'])->find($id);

        if (!$pokemon) {
            return response()->json(['error' => 'Pokemon not found'], 404);
        }

        return new PokemonDetailResource($pokemon);
    }
}
