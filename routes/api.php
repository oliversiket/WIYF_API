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
});

$router->group(["prefix" => "ingredients"], function ($router) {

    $router->get("/", "Ingredients@index");

    $router->get("/{ingredient}/recipes", "Ingredients@searchRecipe");

    $router->get("/{ingredient}", "Ingredients@show");

    // $router->get("/{ingredient}/{ingredient}/recipes", "Ingredients@searchTwoRecipe");


    
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
