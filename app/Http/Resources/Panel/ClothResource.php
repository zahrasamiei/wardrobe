<?php

namespace App\Http\Resources\Panel;

use Illuminate\Http\Resources\Json\JsonResource;

class ClothResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->resource->id,
            "name" => $this->resource->name,
            "image" => $this->resource->image,
            "client_id" => $this->resource->client_id,
            "color_id" => $this->resource->color_id,
            "occasion_id" => $this->resource->occasion_id,
            "season_id" => $this->resource->season_id,
            "category_id" => $this->resource->category_id,
            "category" => $this->resource->category ? new CategoryResource($this->resource->category) : [],
            "color" => $this->resource->color ? new ColorResource($this->resource->color) : [],
            "season" => $this->resource->season ? new SeasonResource($this->resource->season) : [],
            "client" => $this->resource->client ? new ClientResource($this->resource->client) : [],
        ];
    }
}
