<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pokemon_abilities', function (Blueprint $table) {
            $table->id();
            //TODO: Care for this when making api, in api the name is called ability in the abilities array, in json its name
            $table->string('name');
            $table->boolean('is_hidden');
            $table->integer('slot');
            $table->timestamps();

            $table->foreignIdFor(\App\Models\Pokemon::class)->constrained('pokemons')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon_abilities');
    }
};
