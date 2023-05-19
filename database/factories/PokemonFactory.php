<?php

namespace Database\Factories;

use App\Models\Pokemon;
use App\Models\PokemonAbility;
use App\Models\PokemonSprite;
use App\Models\PokemonType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pokemon>
 */
class PokemonFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'base_experience' => $this->faker->numberBetween(1, 100),
            'height' => $this->faker->numberBetween(1, 65),
            'weight' => $this->faker->numberBetween(1, 1014),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Pokemon $pokemon) {
            $pokemon->sprite()->save(PokemonSprite::factory()->make());
            $pokemon->abilities()->saveMany(PokemonAbility::factory()->count(2)->make());
            $pokemon->types()->saveMany(PokemonType::factory()->count(2)->make());
        });
    }

}
