<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shopping_list_id')->unsigned();
            $table->integer('grocery_id')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->timestamps();

            $table->foreign('shopping_list_id')->references('id')->on('shopping_lists');
            $table->foreign('grocery_id')->references('id')->on('groceries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items');
    }
}
