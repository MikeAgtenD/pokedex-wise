<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokemonType extends Model
{
    use hasfactory;
    protected $fillable = [
        'name',
        'url',
        'slot',
        'pokemon_id',
    ];

    public function pokemon()
    {
        return $this->belongsTo(Pokemon::class);
    }
}
