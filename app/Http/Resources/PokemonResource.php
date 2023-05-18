<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PokemonResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'sprites' => [
                'front_default' => $this->sprites->front_default,
            ],
            'types' => $this->types->map(function($type) {
                return [
                    'type' => [
                        'name' => $type->name,
                    ],
                    'slot' => $type->slot,
                ];
            }),
        ];
    }
}
