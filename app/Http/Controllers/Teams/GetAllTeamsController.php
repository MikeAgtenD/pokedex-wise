<?php

namespace App\Http\Controllers\Teams;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeamResource;
use App\Models\Team;
use Illuminate\Http\Request;

class GetAllTeamsController extends Controller
{
    public function __invoke(Request $request)
        {
            $teams = Team::with('pokemons')->get();

            return TeamResource::collection($teams);
        }
}
