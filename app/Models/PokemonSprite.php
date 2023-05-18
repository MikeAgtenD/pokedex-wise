<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sprite extends Model
{
    protected $fillable = [
        'pokemon_id',
        'front_default',
        'front_female',
        'front_shiny',
        'front_shiny_female',
        'back_default',
        'back_female',
        'back_shiny',
        'back_shiny_female'
    ];

    public function pokemon()
    {
        return $this->belongsTo(Pokemon::class);
    }
}
