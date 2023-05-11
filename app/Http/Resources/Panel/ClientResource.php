<?php

namespace App\Http\Resources\Panel;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
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
            "email" => $this->resource->email,
            "avatar" => $this->resource->avatar,
            "gender" => !empty($this->resource->clientData) ? $this->resource->clientData->gender->name : "",
            "created_at" => viewDateTime($this->resource->created_at),
        ];
    }
}
