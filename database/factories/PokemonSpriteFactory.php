<?php

namespace Database\Factories;

use App\Models\PokemonSprite;
use Illuminate\Database\Eloquent\Factories\Factory;

class PokemonSpriteFactory extends Factory
{
    protected $model = PokemonSprite::class;

    public function definition()
    {
        return [
            'pokemon_id' => null,
            'front_default' => $this->faker->imageUrl(100, 100, 'pokemon'),
            'front_female' => $this->faker->imageUrl(100, 100, 'pokemon'),
            'front_shiny' => $this->faker->imageUrl(100, 100, 'pokemon'),
            'front_shiny_female' => $this->faker->imageUrl(100, 100, 'pokemon'),
            'back_default' => $this->faker->imageUrl(100, 100, 'pokemon'),
            'back_female' => $this->faker->imageUrl(100, 100, 'pokemon'),
            'back_shiny' => $this->faker->imageUrl(100, 100, 'pokemon'),
            'back_shiny_female' => $this->faker->imageUrl(100, 100, 'pokemon'),
        ];
    }
}
