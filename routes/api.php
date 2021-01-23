<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\GameplayController;
use App\Http\Controllers\UserController;
use App\Http\Resources\GameResource;
use App\Http\Resources\GamesCollection;
use App\Http\Resources\UserResource;
use App\Http\Resources\UsersCollection;
use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/players', UserController::class)->only('index', 'show');
// Route::get('/users{user}', [UserController::class, 'show']);

Route::apiResource('/games', GameController::class)->only('index', 'show');

Route::post('/games/range', [GameController::class, 'getGamePerDateRange']);

Route::apiResource('/gameplays', GameplayController::class)->only('index', 'show');

// Route::get('/games{game}', [GameController::class, 'show']);

