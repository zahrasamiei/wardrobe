<?php

namespace App\Http\Resources\Landing;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
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
            "title" => $this->resource->title,
            "content" => $this->resource->content,
            "image" => $this->resource->image,
            "created_at" => viewDateTime($this->resource->created_at),
        ];
    }
}
