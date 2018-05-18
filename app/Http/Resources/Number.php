<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Number extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'conv_number' => $this->conv_number,
            'conv_times' => $this->conv_times
        ];
    }
}
