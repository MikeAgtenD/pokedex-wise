<?php

namespace Tests\Feature;

use App\Http\Controllers\Pokemons\GetAllPokemonsController;
use App\Models\Pokemon;
use App\Models\PokemonAbility;
use App\Models\PokemonSprite;
use App\Models\PokemonType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GetAllPokemonsTest extends TestCase
{
    use RefreshDatabase;

    protected $amountPokemons = 5;

    protected function setUp(): void
    {
        parent::setUp();

        $pokemonNames = ['Bulbasaur', 'Charmander', 'Squirtle', 'Pikachu', 'Eevee'];

        foreach($pokemonNames as $name) {
            Pokemon::factory()
                ->hasAbilities(PokemonAbility::factory()->count(2))
                ->hasSprite(PokemonSprite::factory()->count(1))
                ->hasTypes(PokemonType::factory()->count(2))
                ->create(['name' => $name]);
        }
    }

    /**
     * Test if all pokemons can be retrieved
     */
    public function test_api_v1_can_get_all_pokemons()
    {
        $response = $this->get(action(GetAllPokemonsController::class));

        $response->assertStatus(200);

        $this->assertCount($this->amountPokemons, $response['data']);
    }

    /**
     * Test the structure of response using the resource.
     */
    public function test_api_v1_response_structure_resource_is_correct()
    {
        $response = $this->get(action(GetAllPokemonsController::class));

        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'name',
                    'sprites' => [
                        'front_default'
                    ],
                    'types' => [
                        '*' => [
                            'type' => [
                                'name'
                            ],
                            'slot'
                        ]
                    ]
                ]
            ]
        ]);
    }

    /**
     * Test the sorting functionality.
     */
    public function test_api_v1_pokemons_can_be_sorted_by_name_ascending()
    {
        $response = $this->get(action(GetAllPokemonsController::class, ['sort' => 'name-asc']));

        $response->assertStatus(200);

        $responseNames = collect($response['data'])->pluck('name');

        $expectedNames = Pokemon::orderBy('name', 'asc')->pluck('name');

        $this->assertEquals($expectedNames, $responseNames);
    }
}