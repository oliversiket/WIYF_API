<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use Searchable;

    public $timestamps = false; // don't need timestamps
    protected $fillable = ["name"]; // name should be fillable

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class)->withPivot('unit');
    }
    
    public static function parse(array $ingredients)
    {
        // turns into a collection and maps over
        return collect($ingredients)->map(function ($ingredient) {
            // remove any blank spaces either side
            $string = trim($ingredient);
            return static::makeIngredient($string);
        });
    }

    private static function makeIngredient($string)
    {
        // check if tag already exists
        $exists = Ingredient::where("name", $string)->first();

        // if tag exists return it, otherwise create a new one
        return $exists ? $exists : Ingredient::create(["name" => $string]);
    }

    public function searchableAs()
    {
        return 'ingredients_index';
    }
}
