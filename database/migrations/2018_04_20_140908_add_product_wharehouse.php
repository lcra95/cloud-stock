<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductWharehouse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_wharehouse', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('products_id')->unsigned();
            $table->integer('wharehouses_id')->unsigned();
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('wharehouses_id')->references('id')->on('wharehouses')->onDelete('cascade');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_wharehouse');
    }
}
