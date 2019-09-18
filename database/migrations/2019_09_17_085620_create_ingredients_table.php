<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');   
        });

        Schema::create("ingredient_recipe", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->bigInteger("recipe_id")->unsigned();
            $table->bigInteger("ingredient_id")->unsigned();
            $table->text("unit")->nullable(true);
            $table->foreign("recipe_id")->references("id")->on("recipes")->onDelete("cascade");
            $table->foreign("ingredient_id")->references("id")->on("ingredients")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("ingredient_recipe");
        Schema::drop("ingredients");
    }
}
