<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Event extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id'           =>  $this->id,
            'name'         =>  $this->name,
            'description'  =>  $this->description,
            'code'         =>  $this->code,
            'status'       =>  $this->status
        ];
    }
}
