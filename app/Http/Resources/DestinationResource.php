<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DestinationResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'en_name' => $this->en_name,
            'fr_name' =>$this->fr_name,
            'en_description'=>$this->en_description,
            'fr_description'=>$this->fr_description,
            'en_distance'=>$this->en_distance,
            'fr_distance'=>$this->fr_distance,
            'en_duration'=>$this->en_duration,
            'fr_duration'=>$this->fr_duration,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
