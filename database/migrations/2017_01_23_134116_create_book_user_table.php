<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_user',function(Blueprint $table){
            $table->increments('id');

            $table->integer('book_id');
            $table->integer('user_id');

            $table->foreign('book_id')->references('id')->on('books')
            ->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('user')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('book_user');
    }
}
