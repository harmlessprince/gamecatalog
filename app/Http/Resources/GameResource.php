<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
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
            'game_id' => $this->id,
            'game_name'   => $this->name,
            'created_at' => Carbon::parse($this->created_at)->format("F j, Y"),
            'versions'  => VersionResource::collection($this->versions),
        ];

    }
}
