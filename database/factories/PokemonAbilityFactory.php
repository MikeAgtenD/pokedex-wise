<?php

namespace Database\Factories;

use App\Models\PokemonAbility;
use Illuminate\Database\Eloquent\Factories\Factory;

class PokemonAbilityFactory extends Factory
{
    protected $model = PokemonAbility::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'is_hidden' => $this->faker->boolean(),
            'slot' => $this->faker->numberBetween(1, 3),
            'pokemon_id' => null,
        ];
    }
}
