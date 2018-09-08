<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductSaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('products_id')->unsigned();
            $table->integer('sales_id')->unsigned();
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('iva');
            $table->integer('total');
            $table->foreign('sales_id')->references('id')->on('sales');
            $table->foreign('products_id')->references('id')->on('products');            
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
        Schema::drop('product_sale');
    }
}
