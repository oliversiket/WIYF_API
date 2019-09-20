<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RecipeListResource extends JsonResource
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
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description, 
            "prep_time" => $this->prep_time, 
            "num_servings" => $this->num_servings, 
            "img_url" => $this->img_url, 
            "img_alt" => $this->img_alt, 
        ];
    }
}
