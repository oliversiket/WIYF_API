<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RecipeRequest;
use App\Http\Resources\RecipeListResource;
use App\Http\Resources\RecipeResource;
use App\Recipe;
use App\Ingredient;

class Recipes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RecipeListResource::collection(Recipe::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecipeRequest $request)
    {
        $data = $request->only(["name", "description", "category", "prep_time", "method", "num_servings", "img_url", "img_alt"]);

        $recipe = Recipe::create($data);

        $ingredients = Ingredient::parse($request->get("ingredients"));
        $recipe->setIngredients($ingredients);
        
        return new RecipeResource($recipe);

    }
    public function showRecipes($id1, $id2 = null, $id3 = null)
    {
        $numOfIngredients = $id3 ? 3 : ($id2 ? 2 : 1);

        $recipes = RecipeResource::collection(Recipe::all());

        $matches = [];

        foreach($recipes as $recipe){

            foreach($recipe->ingredients as $ingItem){
                if($ingItem->id == $id1){
                    if (isset($matches[$recipe->id])){
                        $matches[$recipe->id] += 1;
                    }else{
                        $matches[$recipe->id] = 1;
                    }
                }
                if($ingItem->id == $id2){
                    if (isset($matches[$recipe->id])){
                        $matches[$recipe->id] += 1;
                    }else{
                        $matches[$recipe->id] = 1;
                    }
                }
                if($ingItem->id == $id3){
                    if (isset($matches[$recipe->id])){
                        $matches[$recipe->id] += 1;
                    }else{
                        $matches[$recipe->id] = 1;
                    }
                }
            }
        }
     
        arsort($matches);
        $matchesKeys = array_keys($matches);

        $result = $recipes->filter(function($recipe) use($matchesKeys, $matches, $numOfIngredients){

            return in_array($recipe->id, $matchesKeys) && $matches[$recipe->id] === $numOfIngredients;

        });
        var_dump($result);
        var_dump(empty($result));

        return count($result) == 0 ? "No recipe found! Try different ingredients!" : $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        return new RecipeResource($recipe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
