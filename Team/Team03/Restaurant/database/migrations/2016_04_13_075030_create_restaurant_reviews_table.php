<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_reviews', function (Blueprint $table) {
            $table->increments('id');
//            $table->integer('customer_id')->unsigned();
            $table->string('customer_name', 30);
            $table->string('customer_email', 60);
            $table->string('review', 140);
            $table->timestamps();

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
        Schema::drop('restaurant_reviews');
    }
}
