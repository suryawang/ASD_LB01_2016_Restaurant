<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_details', function (Blueprint $table) {
            $table->integer('recipe_id')->unsigned();
            $table->integer('ingredient_id')->unsigned();
            $table->integer('qty')->unsigned();
            $table->timestamps();

            $table->primary(['recipe_id', 'ingredient_id']);
            $table->foreign('recipe_id')->references('id')->on('recipes');
            $table->foreign('ingredient_id')->references('id')->on('ingredients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('recipe_details');
    }
}
