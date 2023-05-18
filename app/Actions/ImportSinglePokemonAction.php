<?php

namespace App\Actions;

use Illuminate\Support\Facades\Http;
use App\Models\Pokemon;
use App\Models\PokemonAbility;
use App\Models\PokemonSprite;
use App\Models\PokemonType;

class ImportSinglePokemonAction
{
    public function execute(string $pokemonIdentifier)
    {
        $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$pokemonIdentifier}");

        if ($response->notFound()){
            return ['error' => "Pokemon not found: " . $pokemonIdentifier];
        }

        if (! $response->successful()){
            return ['error' => "Failed to fetch the Pokemon: " . $pokemonIdentifier];
        }

        $pokemonData = $response->json();

        $pokemon = Pokemon::create([
            'name' => $pokemonData['name'],
            'base_experience' => $pokemonData['base_experience'],
            'height' => $pokemonData['height'],
            'weight' => $pokemonData['weight'],
        ]);

        $spriteData = $pokemonData['sprites'];
        PokemonSprite::create([
            'pokemon_id' => $pokemon->id,
            'front_default' => $spriteData['front_default'],
            'front_shiny' => $spriteData['front_shiny'],
            'back_default' => $spriteData['back_default'],
            'back_shiny' => $spriteData['back_shiny'],
            'front_female' => $spriteData['front_female'],
            'front_shiny_female' => $spriteData['front_shiny_female'],
            'back_female' => $spriteData['back_female'],
            'back_shiny_female' => $spriteData['back_shiny_female'],
        ]);

        foreach ($pokemonData['abilities'] as $abilityData) {
            PokemonAbility::create([
                'name' => $abilityData['ability']['name'],
                'is_hidden' => $abilityData['is_hidden'],
                'slot' => $abilityData['slot'],
                'pokemon_id' => $pokemon->id,
            ]);
        }

        foreach ($pokemonData['types'] as $typeData) {
            PokemonType::create([
                'pokemon_id' => $pokemon->id,
                'name' => $typeData['type']['name'],
                'url' => $typeData['type']['url'],
                'slot' => $typeData['slot']
            ]);
        }

        return $pokemon;
    }
}
