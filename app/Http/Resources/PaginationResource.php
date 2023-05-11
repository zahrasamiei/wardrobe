<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaginationResource extends JsonResource
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
            "total" => $this->resource["total"],
            "perPage" => $this->resource["perPage"],
            "page" => $this->resource["page"],
            "previousPage" => $this->resource["previousPage"],
            "nextPage" => $this->resource["nextPage"],
            "lastPage" => $this->resource["lastPage"],
            "result" => $this->resource["data"],
        ];
    }
}
