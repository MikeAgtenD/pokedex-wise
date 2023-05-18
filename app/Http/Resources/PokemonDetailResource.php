<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PokemonDetailResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'sprites' => [
                'front_default' => $this->sprite->front_default,
                'front_female' => $this->sprite->front_female,
                'front_shiny' => $this->sprite->front_shiny,
                'front_shiny_female' => $this->sprite->front_shiny_female,
                'back_default' => $this->sprite->back_default,
                'back_female' => $this->sprite->back_female,
                'back_shiny' => $this->sprite->back_shiny,
                'back_shiny_female' => $this->sprite->back_shiny_female,
            ],
            'types' => $this->types->map(function($type) {
                return [
                    'type' => $type->name,
                    'slot' => $type->slot,
                ];
            }),
            'height' => $this->height,
            'weight' => $this->weight,
            'abilities' => $this->abilities->map(function($ability) {
                return [
                    'ability' => $ability->name,
                    'is_hidden' => $ability->is_hidden,
                    'slot' => $ability->slot,
                ];
            }),
        ];
    }
}
