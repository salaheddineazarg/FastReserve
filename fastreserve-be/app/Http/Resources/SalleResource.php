<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SalleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' =>$this->description,
            'image' => $this->image,
            'price' => $this->price,
            'date_open' =>$this->date_open,
            'date_close' => $this->date_close,
            'location' => $this->location,
            'category' =>$this->category->type,
             'id_owner'=>$this->id_owner
            // You can add more data or nested resources as needed
        ];
    }
}
