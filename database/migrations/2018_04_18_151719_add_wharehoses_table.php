<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWharehosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wharehouses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('sucursals_id')->unsigned();
            $table->foreign('sucursals_id')->references('id')->on('sucursals')->onDelete('cascade');
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
        Schema::drop('wharehouses');
    }
}
