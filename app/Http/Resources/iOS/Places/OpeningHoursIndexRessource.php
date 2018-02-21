<?php

namespace Genusshaus\Http\Resources\iOS\Places;

use Illuminate\Http\Resources\Json\Resource;

class OpeningHoursIndexRessource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'weekday' => $this->weekday,
            'open'    => $this->open,
            'close'   => $this->close,
        ];
    }
}