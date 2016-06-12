<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_transactions', function (Blueprint $table) {
            $table->increments('id');
//            $table->integer('staff_id')->unsigned();
//            $table->integer('customer_id')->unsigned();
            $table->integer('table_number')->unsigned();
            $table->dateTime('order_date');
            $table->timestamps();

//            $table->foreign('customer_id')->references('id')->on('customers');
//            $table->foreign('staff_id')->references('id')->on('staff');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('header_transactions');
    }
}
