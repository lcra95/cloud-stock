<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserSucursal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sucursal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sucursals_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->foreign('sucursals_id')->references('id')->on('sucursals')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');                
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
        Schema::drop('user_sucursal');
    }
}
