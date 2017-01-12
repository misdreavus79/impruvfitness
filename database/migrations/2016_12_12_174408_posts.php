<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // posts table
        Schema::create('posts', function(Blueprint $table)
        {
          $table->increments('id');
          $table->integer('author_id')
                ->unsigned();
          $table->foreign('author_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
          $table->string('title')
                ->unique();
          $table->text('body');
          $table->string('slug')
                ->unique();
          $table->boolean('active');
          $table->string('type');
          $table->integer('featured_asset')
                ->unsigned();
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
        // drop posts table
        Schema::drop('posts');
    }
}
