<?php

namespace App\Http\Controllers\Teams;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeamResource;
use App\Models\Pokemon;
use App\Models\Team;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @group Teams
 *
 * API endpoints for managing teams
 *
 */

class SetTeamPokemonsController extends Controller
{
    /**
     * Set Pokemons of a team
     *
     * This endpoint updates the pokemons of the specified team.
     *
     * @urlParam id required The ID of the team. Example: 1
     *
     * @bodyParam pokemons array required An array of Pokemon ID's to set. Example: [1, 2, 3, 4, 5, 6]
     *
     * @responseField id int The ID of the team
     * @responseField name string The name of the team
     * @responseField pokemons array The pokemons associated with the team
     *
     * @response 404 {
     *   "error": "TeamNotFound",
     *   "error_message": "Team not found."
     * }
     *
     * @response 400 {
     *   "error": "TooManyPokemons",
     *   "error_message": "A team can have a maximum of 6 pokemons."
     * }
     *
     * @param Request  $request
     * @param  int $id
     * @return JsonResponse|TeamResource
     */
    public function __invoke(Request $request, $id)
    {
        $team = Team::find($id);
        if (!$team) {
            return response()->json([
                'error' => 'TeamNotFound',
                'error_message' => 'Team not found.'
            ], 404);
        }

        $pokemonIds = $request->input('pokemons');
        $pokemons = Pokemon::whereIn('id', $pokemonIds)->get();

        if($pokemons->count() > 6){
            return response()->json([
                'error' => 'TooManyPokemons',
                'error_message' => 'A team can have a maximum of 6 pokemons.'
            ], 400);
        }

        $team->pokemons()->sync($pokemonIds);

        //different response from openapi example
        return new TeamResource($team->load('pokemons'));
    }
}
