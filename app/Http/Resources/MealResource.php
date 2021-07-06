<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MealResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
             'id' => $this->id,
            'title' => $this->title,
            'description'=> $this->description,
            'description_cro'=> $this->description_cro,
            'status' => $this->deleted_at > 0 ? 'deleted' : 'created',
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'category' => (new CategoryResource($this->category_id))
             
            ],
          
        ];
    }
   
}
