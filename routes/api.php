<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
$router->group(["prefix" => "recipes"], function ($router) {

    $router->get("/", "Recipes@index");
    
    $router->post("/", "Recipes@store");

    $router->get("{recipe}", "Recipes@show");
    
    $router->get("/match/{id1}", "Recipes@showRecipes");

    $router->get("/match/{id1}/{id2}", "Recipes@showRecipes");

    $router->get("/match/{id1}/{id2}/{id3}", "Recipes@showRecipes");

});

$router->group(["prefix" => "ingredients"], function ($router) {

    $router->get("/", "Ingredients@index");

    $router->get("/{ingredient}/recipes", "Ingredients@searchRecipe");

    $router->get("/{ingredient}", "Ingredients@show");

    // $router->get("/{ingredient}/{ingredient}/recipes", "Ingredients@searchTwoRecipe");


    
});
Route::get('/search', function (Request $request) {

    // $orders = App\Ingredient::search('Star Trek')->where('user_id', 1)->get();
    $orders = App\Recipe::search('')->raw();
    // $orders = App\Recipe::search('butter')
    // ->within('recipes_index')
    // ->get();
    return $orders;
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
