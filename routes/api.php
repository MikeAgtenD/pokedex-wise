<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Pokemons\GetAllPokemonsController;
use \App\Http\Controllers\Pokemons\GetPokemonByIdController;
use \App\Http\Controllers\Teams\GetAllTeamsController;
use \App\Http\Controllers\Teams\CreateTeamController;
use \App\Http\Controllers\Teams\GetTeamByIdController;
use \App\Http\Controllers\Teams\SetTeamPokemonsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//TODO:: Fix the way the controllers are called, invokable
Route::prefix('v1')->group(function () {
    Route::get('pokemons', [GetAllPokemonsController::class, '__invoke']);
    Route::get('pokemons/{id}', [GetPokemonByIdController::class, '__invoke']);

    Route::get('teams', [GetAllTeamsController::class, '__invoke']);
    Route::post('teams', [CreateTeamController::class, '__invoke']);
    Route::get('teams/{id}', [GetTeamByIdController::class, '__invoke']);
    Route::post('teams/{id}', [SetTeamPokemonsController::class, '__invoke']);
});
