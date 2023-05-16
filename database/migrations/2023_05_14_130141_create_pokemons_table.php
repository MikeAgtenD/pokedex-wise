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
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('base_experience');
            $table->integer('height');
            $table->integer('weight');
            $table->timestamps();
        });
    }

    //TODO: Add these in seperate tables later on
    //            $table->string('abilities');
    //            $table->json('sprites');

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon');
    }
};
