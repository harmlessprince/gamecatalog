<?php

namespace App\Http\Controllers;

use App\Http\Resources\GameResource;
use App\Http\Resources\GamesCollection;
use App\Models\Game;
use App\Models\Version;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    /**
     * Add a word to the list.
     *
     * This endpoint allows you to add a word to the list. It's a really useful endpoint,
     * and you should play around with it for a bit.
     */
    public function index()
    {

        $versions = Version::with('players')
            ->orderBy('created_at')
            ->get()
            ->groupBy(function ($val) {
                return Carbon::parse($val->created_at)->format('d j, Y');
            });


        // return GameResource::collection($versions)->response();

        return new GamesCollection($versions);
    }

    public function getGamePerDateRange(Request $request)
    {
        $this->validate($request, [
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after:start_date',
        ]);

        $from = date($request->start_date);
        $to = date($request->end_date);
        $versions = Version::with('players')->whereBetween('created_at',  [$from, $to])->paginate(10);
        return new GamesCollection($versions);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($game)
    {
        //


        try {
            return new GameResource(Game::findOrFail($game));
        } catch (Exception $e) {

            return response()->json([
                'message' => 'Record Not Found !!!'
            ], 404);
        }
    }
}
