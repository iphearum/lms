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
            $table->bigIncrements('id');
            $table->string('name');     // name of book
            $table->string('auth');     // who create this book
            $table->string('identifier')->nullable();   // who is public this this book
            $table->string('sex')->nullable();      //type of file e.g. document, pdf, text
            $table->integer('category_id');    // category of the book
            $table->integer('stocks');
            $table->string('status')->nullable();   // public or not if public user can download
            $table->string('date')->nullable();    // year or date that created this book
            $table->text('description')->nullable();  // descript some of this book
            $table->string('image');    // cover of the book
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
        Schema::dropIfExists('books');
    }
}
