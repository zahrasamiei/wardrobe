<?php

namespace App\Http\Resources\Application;

use Illuminate\Http\Resources\Json\JsonResource;

class LandingResource extends JsonResource
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
            "key" => $this->resource->key,
            "title" => $this->resource->title,
            "subtitle" => $this->resource->subtitle,
            "text" => $this->resource->text,
            "category" => $this->resource->category,
            "link" => $this->resource->link,
            "image" => asset("storage/".$this->resource->image),
        ];
    }
}
