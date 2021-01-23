<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class VersionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // $game = $this->whenLoaded('game');
        return [
            'version_id'    => $this->id,
            'version_name'  => $this->version,
            'game_name' => $this->game->name,
            'created_at'   =>  Carbon::parse($this->created_at)->format("F j, Y"),
        ];
    }
}
