<?php

namespace App\Http\Resources;

use App\Models\Version;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
           'player_id' => $this->id,
           'player_name'   => $this->name,
           'player_email'  => $this->email,
           'last_login' =>$this->last_login_at,
           'login_ip'   => $this->last_login_ip,
            'role'  => $this->whenPivotLoaded('gameplay_players', function ()
            {
                return $this->pivot->role;
            }),
        //    'created_at' => $this->created_at->format("F j, Y, g:i a"),
           'games'  => VersionResource::collection($this->whenLoaded('versions')),
           'gameplays'  => GameplayResource::collection($this->whenLoaded('gameplays')),
        // 'gameplays'  => $this->gameplays,
        ];
    }
}
