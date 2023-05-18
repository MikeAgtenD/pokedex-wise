<?php

namespace App\Console\Commands;

use App\Models\PokemonType;
use Illuminate\Console\Command;
use App\Models\Pokemon;
use App\Models\PokemonAbility;
use App\Models\PokemonSprite;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
                'weight' => $pokemonData['weight'],
            ]);

            foreach ($pokemonData['abilities'] as $abilityData) {
                PokemonAbility::create([
                    'name' => $abilityData['ability']['name'],
                    'slot' => $abilityData['slot'],
                    'is_hidden' => $abilityData['is_hidden'],
                    'pokemon_id' => $pokemon->id
                ]);
            }

            $spriteData = $pokemonData['sprites'];
            if ($spriteData) {
                // Download and store the front_default sprite to storage.
                $frontDefaultUrl = $spriteData['front_default'];
                $imageContents = file_get_contents($frontDefaultUrl);
                $imageName = Str::slug($pokemon->name) . '_front_default.png';
                Storage::disk('public')->put($imageName, $imageContents);

                // Save the local path for the front_default sprite.
                $spriteData['front_default'] = 'storage/' . $imageName;

                // Add pokemon_id to the sprite data and save it.
                $spriteData['pokemon_id'] = $pokemon->id;
                PokemonSprite::create($spriteData);
            }

            foreach ($pokemonData['types'] as $typeData) {
                PokemonType::create([
                    'pokemon_id' => $pokemon->id,
                    'name' => $typeData['type']['name'],
                    'url' => $typeData['type']['url'],
                    'slot' => $typeData['slot']
                ]);
            }
            $bar->advance();
        }

        $bar->finish();
        $this->info('Pokémon data imported successfully! ⚡ 🌱 🔥');
    }
}
