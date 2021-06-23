<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('categories_id')->unsigned();
            $table->integer('author_id')->unsigned();
            $table->integer('publishing_id')->unsigned();
            $table->date('Release_Date');
            $table->integer('number');
            $table->String('image');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('categories_id')->references('id')->on('categoreys');
            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('publishing_id')->references('id')->on('publishes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
