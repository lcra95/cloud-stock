<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->text('observation');
            $table->integer('mount');
            $table->integer('iva');
            $table->integer('total');
            $table->integer('sucursals_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->integer('clients_id')->unsigned();          
            $table->foreign('sucursals_id')->references('id')->on('sucursals')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');            
            $table->foreign('clients_id')->references('id')->on('clients')->onDelete('cascade');            
           
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
        Schema::drop('sales');
    }
}
