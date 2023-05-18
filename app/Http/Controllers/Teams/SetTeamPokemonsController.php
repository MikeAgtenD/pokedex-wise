<?php

namespace App\Http\Controllers\Teams;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeamResource;
use App\Models\Pokemon;
use App\Models\Team;
use Illuminate\Http\Request;

class SetTeamPokemonsController extends Controller
{
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
