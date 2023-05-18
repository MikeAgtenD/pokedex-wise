<?php

namespace App\Http\Controllers\Teams;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeamResource;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * @group Teams
 *
 * API endpoints for managing teams
 *
 */
class GetAllTeamsController extends Controller
{
    /**
     * Get all teams
     *
     * Returns a list of all teams, each with their associated pokemons.
     *
     * @responseField data array The list of teams
     * @responseField data.*.id int The ID of the team
     * @responseField data.*.name string The name of the team
     * @responseField data.*.pokemons array The pokemons associated with the team
     *
     * @param  Request  $request
     * @return AnonymousResourceCollection
     */
    public function __invoke(Request $request)
        {
            $teams = Team::with('pokemons')->get();

            return TeamResource::collection($teams);
        }
}
