<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transactions', function (Blueprint $table) {
            $table->integer('transaction_id')->unsigned();
            $table->integer('food_id')->unsigned();
            $table->integer('qty')->unsigned();
            $table->string('status', 10);
            $table->timestamps();

            $table->primary(['transaction_id', 'food_id']);
            $table->foreign('transaction_id')->references('id')->on('header_transactions');
            $table->foreign('food_id')->references('id')->on('foods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detail_transactions');
    }
}
