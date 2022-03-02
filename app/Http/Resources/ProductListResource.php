<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $path = \Storage::url($this->image);
        return [
            'name'=>$this->name,
            'code'=>$this->code,
            'price'=>$this->price,
            'quantity'=>$this->quantity,
            'description'=>$this->description,
            'image'=>url($path),
            'status'=>$this->status
        ];
    }
}
