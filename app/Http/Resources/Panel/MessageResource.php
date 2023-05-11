<?php

namespace App\Http\Resources\Panel;

use Carbon\Carbon;
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
            "admin_id" => $this->resource->admin_id ?? 0,
            "reply_id" => $this->resource->reply_id ?? 0,
            "reply_email_sent" => $this->resource->reply_email_sent ?? 0,
            "reply" => !empty($this->resource->reply) ? new MessageResource($this->resource->reply) : []
            ,
            "created_at" => viewDateTime($this->resource->created_at),
        ];
    }
}
