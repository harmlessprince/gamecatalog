<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Http\Resources\UsersCollection;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with(['versions', 'gameplays']);
        return UserResource::collection($users->paginate(5))->response();
    }

  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($player)
    {
        $player = User::where('id', '=', $player)
            ->with(['versions', 'gameplays'])->first();
        return new UserResource($player);
        // $player = User::with(['versions', 'gameplays']);
        // // return  $user;
        // return new UserResource(User::findOrFail($player));
    }

   
}
