<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokemonAbility extends Model
{
    use hasfactory;
    protected $fillable = ['name', 'is_hidden', 'slot', 'pokemon_id'];

    public function pokemon()
    {
        return $this->belongsTo(Pokemon::class);
    }
}
