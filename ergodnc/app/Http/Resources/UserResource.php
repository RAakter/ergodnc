<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // if(is_null($this->resource)) {
        //     return [];
        // }

        // return is_array($this->resource)
        //     ? $this->resource
        //     : $this->resource->toArray();

        return parent::toArray($request);
    }
}
