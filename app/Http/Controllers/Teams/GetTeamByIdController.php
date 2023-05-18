<?php

namespace App\Http\Controllers\Teams;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeamResource;
use App\Models\Team;
use Illuminate\Http\Request;

class GetTeamByIdController extends Controller
{
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
