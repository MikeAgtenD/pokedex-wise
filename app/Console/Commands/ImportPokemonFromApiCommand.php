<?php

namespace App\Console\Commands;

use App\Actions\ImportSinglePokemonAction;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class ImportPokemonFromApiCommand extends Command
{
    protected $signature = 'import:pokemon-from-json {pokemon}';

    protected $description = 'Imports a single Pokemon by name or ID from the Pokemon API.';

    public function handle(ImportSinglePokemonAction $importSinglePokemonAction)
    {
        $pokemonIdentifier = $this->argument('pokemon');

        $pokemon = $importSinglePokemonAction->execute($pokemonIdentifier);

        if (isset($pokemon['error'])) {
            $this->error($pokemon['error']);
            return;
        }

        $this->info("Pokemon '{$pokemon->name}' has been successfully imported.");
    }
}
