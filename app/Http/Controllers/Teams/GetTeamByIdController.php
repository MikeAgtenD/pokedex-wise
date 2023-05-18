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
class GetTeamByIdController extends Controller
{
    /**
     * Get a team by ID
     *
     * Returns the team with the specified ID, along with its associated pokemons.
     *
     * @urlParam id required The ID of the team. Example: 1
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
     * @param $id
     * @return JsonResponse|TeamResource
     */
    public function __invoke($id)
    {
        $team = Team::with('pokemons')->find($id);

        if (!$team) {
            return response()->json([
                'error' => 'TeamNotFound',
                'error_message' => 'Team not found.'
            ], 404);
        }

        return new TeamResource($team);
    }
}
