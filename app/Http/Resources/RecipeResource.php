<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RecipeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->resource->load("ingredients");
        // $this->resource->load("ingredient_recipe");
        $collection = collect($this->ingredients);

        return [
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description, 
            "prep_time" => $this->prep_time, 
            "num_servings" => $this->num_servings, 
            "img_url" => $this->img_url, 
            "img_alt" => $this->img_alt, 
            "category" => $this->category, 
            "method" => $this->method, 
            // "ingredients" => $this->ingredients
            "ingredients" => $collection->map(function ($item){
               
                return array(
                        "id" => $item->id,
                        "name" => $item->name,
                        "quantity" => $item->pivot->unit);
                
                
            })
            // "unit" => $this->whenPivotLoaded("ingredient_recipe", function () {
            //     return $this->pivot->unit;
            // }),      
        ];
    }
}
