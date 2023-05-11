<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResponseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $result = [
            "success" => $isSuccess = $this->resource["success"],
            "message" => $this->resource["message"],
        ];

        if ($isSuccess) {
            $result["data"] = $this->resource["data"];
        }

        return $result;
    }
}
