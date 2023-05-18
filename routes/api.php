<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Pokemons\GetAllPokemonsController;
use \App\Http\Controllers\Pokemons\GetPokemonByIdController;
use \App\Http\Controllers\Teams\GetAllTeamsController;
use \App\Http\Controllers\Teams\CreateTeamController;
use \App\Http\Controllers\Teams\GetTeamByIdController;
use \App\Http\Controllers\Teams\SetTeamPokemonsController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::get('pokemons', GetAllPokemonsController::class);
    Route::get('pokemons/{id}', GetPokemonByIdController::class);

    Route::middleware('token.check')->group(function () {
        Route::get('teams', GetAllTeamsController::class);
        Route::post('teams', CreateTeamController::class);
        Route::get('teams/{id}', GetTeamByIdController::class);
        Route::post('teams/{id}', SetTeamPokemonsController::class);
    });
});
