<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pokemon_team', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Team::class)->constrained('teams')->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Pokemon::class)->constrained('pokemons')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pokemon_team');
    }
};
