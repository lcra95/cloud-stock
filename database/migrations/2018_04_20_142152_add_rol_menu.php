<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRolMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rols_id')->unsigned();
            $table->integer('menus_id')->unsigned();
            $table->foreign('rols_id')->references('id')->on('rols')->onDelete('cascade');             
            $table->foreign('menus_id')->references('id')->on('menus')->onDelete('cascade');            
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
        Schema::drop('rol_menu');
    }
}
