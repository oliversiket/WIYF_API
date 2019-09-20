<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Ingredient;

class Recipe extends Model
{
    use Searchable;

    protected $fillable = ['name', 'description', 'category', 'prep_time', 'method', 'num_servings', 'img_url', 'img_alt'];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class)->withPivot('unit');
    }

    public function setIngredients(Collection $ingredients)
    {
        // update the pivot table with ingredient IDs

        $this->ingredients()->sync($ingredients->pluck("id")->all());

        return $this;
    }
    public function searchableAs()
    {
        return 'recipes_index';
    }
    // relationship to ingredients

    // static method to iterate over an array of ingredients and save on pivot table
}
