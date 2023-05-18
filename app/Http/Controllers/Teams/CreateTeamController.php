<?php

namespace App\Http\Controllers\Teams;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeamResource;
use App\Models\Team;
use Illuminate\Http\Request;

/**
 * @group Teams
 *
 * API endpoints for managing teams
 *
 */
class CreateTeamController extends Controller
{
    /**
     * Create a new team
     *
     * Creates a new team with the provided name.
     *
     * @bodyParam name string required The name of the team to create
     *
     * @responseField data object The created team
     * @responseField data.id int The ID of the team
     * @responseField data.name string The name of the team
     *
     * @param  Request $request
     * @return TeamResource
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $team = Team::create([
            'name' => $request->name,
        ]);

        return new TeamResource($team);
    }
}
