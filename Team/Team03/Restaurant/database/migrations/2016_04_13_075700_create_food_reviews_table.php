<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('food_id')->unsigned();
            $table->string('customer_name', 30);
            $table->string('customer_email', 60);
//            $table->integer('customer_id')->unsigned();
            $table->string('review', 140);
            $table->timestamps();

            $table->foreign('food_id')->references('id')->on('foods');
//            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('food_reviews');
    }
}
