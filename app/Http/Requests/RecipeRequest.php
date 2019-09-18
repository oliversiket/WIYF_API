<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => ["required"],
            "description" => ["required"],
            "category" => ["required"],
            "prep_time" => ["required"],
            "method" => ["required"],
            "num_servings" => ["required"],
            "img_url" => ["required"],
            "img_alt" => ["required"],
            "ingredients" => ["required", "array"], // check tags is an array
            "ingredients.*" => ["string", "max:100"], // check members of tags are strings
         ];
    }
}
