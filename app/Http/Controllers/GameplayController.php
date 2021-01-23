<?php

namespace App\Http\Controllers;

use App\Http\Resources\GameplayResource;
use App\Http\Resources\GameplaysCollection;
use App\Models\Game;
use App\Models\Gameplay;
use Illuminate\Http\Request;

class GameplayController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $gameplays = Gameplay::with('players')
            ->paginate(20);
        return new GameplaysCollection($gameplays);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($gameplay)
    {
        return new GameplayResource(Gameplay::findOrFail($gameplay));
    }
}
