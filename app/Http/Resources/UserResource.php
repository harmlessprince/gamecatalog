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
           'id' => $this->id,
           'name'   => $this->name,
           'email'  => $this->email,
           'last_login' =>$this->last_login_at,
           'login_ip'   => $this->last_login_ip,
        //    'created_at' => $this->created_at->format("F j, Y, g:i a"),
           'games'  => VersionResource::collection($this->whenLoaded('versions')),
           'gameplays'  => GameplayResource::collection($this->whenLoaded('gameplays')),
        // 'gameplays'  => $this->gameplays,
        ];
    }
}
