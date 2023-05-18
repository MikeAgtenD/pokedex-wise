<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Pokemon;
use App\Models\Ability;
use App\Models\Sprite;
use Illuminate\Support\Facades\Storage;

class ImportPokemonData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:pokemon-from-json {file}';

    //Use the line below if you do not want to give the path with the command, the json is in recourses folder.
    //protected $signature = 'import:pokemon-from-json';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command accepts a json format file and imports the pokémon from that json to the mySql database.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filePath = $this->argument('file');
        $json = file_get_contents($filePath);

        //Use the line below if you do not want to give the path with the command, the json is in recourses folder.
        //$json = file_get_contents(resource_path('pokemon_json/pokemons.json'));

        $data = json_decode($json, true);

        $bar = $this->output->createProgressBar(count($data));

        foreach ($data as $pokemonData) {
            $pokemon = Pokemon::create([
                'name' => $pokemonData['name'],
                'base_experience' => $pokemonData['base_experience'],
                'height' => $pokemonData['height'],
                'weight' => $pokemonData['weight']
            ]);
            foreach ($pokemonData['abilities'] as $abilityData) {
                Ability::create([
                    'name' => $abilityData['ability']['name'],
                    'is_hidden' => $abilityData['is_hidden'],
                    'slot' => $abilityData['slot'],
                    'pokemon_id' => $pokemon->id
                ]);
            }

            if (isset($pokemonData['sprites'])) {
                $pokemonData['sprites']['pokemon_id'] = $pokemon->id;
                Sprite::create($pokemonData['sprites']);
            }

            $bar->advance();
        }

        $bar->finish();
        $this->info('Pokémon data imported successfully! ⚡ 🌱 🔥');
    }
}
