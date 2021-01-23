<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class GameplayResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'gameplay_id' => $this->id,
            'no_players'   => $this->no_players,
            'game_type' => ($this->multiplayer) ? 'multiplayer' : 'single',
            'version' =>  new VersionResource($this->version),
            'players'  =>  UserResource::collection($this->players),
            'created_at'   => Carbon::parse($this->created_at)->format("F j, Y, g:i a"),
        ];
    }
}
