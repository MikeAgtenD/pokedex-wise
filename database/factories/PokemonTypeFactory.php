<?php
namespace Database\Factories;

use App\Models\Pokemon;
use App\Models\PokemonAbility;
use App\Models\PokemonType;
use Illuminate\Database\Eloquent\Factories\Factory;

class PokemonTypeFactory extends Factory
{
    protected $model = PokemonType::class;

    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Fire', 'Water', 'Grass', 'Electric', 'Psychic', 'Normal', 'Dark', 'Fairy']),
            'url' => $this->faker->url(),
            'slot' => $this->faker->numberBetween(1, 3),
            'pokemon_id' => null,
        ];
    }
}
