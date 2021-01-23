<?php

namespace App\Http\Controllers;

use App\Http\Resources\GameplayResource;
use App\Http\Resources\GameplaysCollection;
use App\Http\Resources\GameResource;
use App\Models\Game;
use App\Models\Gameplay;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Throw_;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

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

        $gameplays = Gameplay::with(['players'])
            ->paginate(20);
        // return  GameResource::collection($gameplays->paginate(5))->response();
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
        try {
            return new GameplayResource(Gameplay::findOrFail($gameplay));
        } catch (Exception $e) {
            
                return response()->json([
                    'message' => 'Record Not Found !!!'
                ], 404);
            
        }
    }
}
