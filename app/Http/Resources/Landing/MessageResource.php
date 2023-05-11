<?php

namespace App\Http\Resources\Landing;

use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
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
            "message" => $this->resource->message,
            "email" => $this->resource->email,
            "created_at" =>  standardDateTime($this->resource->created_at),
        ];
    }
}
