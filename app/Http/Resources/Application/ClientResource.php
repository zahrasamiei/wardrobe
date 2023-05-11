<?php

namespace App\Http\Resources\Application;

use Illuminate\Http\Resources\Json\JsonResource;
use function App\Http\Resources\standardDateTime;

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
            "anatomy" => !empty($this->resource->clientData)
                ?
                [
                    "gender_id" => $this->resource->clientData->gender_id,
                    "weight" => $this->resource->clientData->weight,
                    "height" => $this->resource->clientData->height,
                    "body_shape_id" => $this->resource->clientData->body_shape_id,
                    "chest_size" => $this->resource->clientData->chest_size,
                    "waist_size" => $this->resource->clientData->waist_size,
                    "hip_size" => $this->resource->clientData->hip_size,
                    "collar_size" => $this->resource->clientData->collar_size,
                    "shoe_size" => $this->resource->clientData->shoe_size,
                    "age" => $this->resource->clientData->age,

                ]
                :
                []
        ];
    }
}
