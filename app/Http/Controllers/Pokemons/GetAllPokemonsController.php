<?php

namespace App\Http\Controllers\Pokemons;

use App\Http\Controllers\Controller;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GetAllPokemonsController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'sort' => [
                'nullable',
                Rule::in(['name-asc', 'name-desc', 'id-asc', 'id-desc']),
            ],
        ]);

        $sort = $request->get('sort');

        $query = Pokemon::query();

        if ($sort) {
            [$column, $direction] = explode('-', $sort);
            $query->orderBy($column, $direction);
        }

        $pokemons = $query->get();

        return response()->json($pokemons);
    }
}
