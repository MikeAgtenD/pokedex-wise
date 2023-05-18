<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = "pokemons";
    protected $fillable = ['name', 'base_experience', 'height', 'weight'];


    public function abilities()
    {
        return $this->hasMany(PokemonAbility::class);
    }

    public function sprites()
    {
        return $this->hasOne(PokemonSprite::class);
    }

    public function types()
    {
        return $this->hasMany(PokemonType::class);
    }
}
