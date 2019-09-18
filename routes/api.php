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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
