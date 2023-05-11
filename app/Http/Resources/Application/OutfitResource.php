<?php

namespace App\Http\Resources\Application;

use Illuminate\Http\Resources\Json\JsonResource;

class OutfitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $clothes = $this->resource->clothes;

        return [
            "id" => $this->resource->id,
            "name" => $this->resource->name,
            "occasion_id" => $this->resource->occasion_id,
            "season_id" => $this->resource->season_id,
            "bookmarked" => $this->resource->bookmarked ?? 0,
            "images" => $clothes ? $clothes->pluck("image") : [],
            "occasion" => $this->resource->occasion ? new OccasionResource($this->resource->occasion) : [],
            "season" => $this->resource->season ? new SeasonResource($this->resource->season) : [],
            "clothes" => $clothes ? ClothResource::collection($this->resource->clothes) : []
        ];
    }
}
