<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'base_experience', 'height', 'weight'];


    //TODO: Add the abilities and sprites relationship
}
