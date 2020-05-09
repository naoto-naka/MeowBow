<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tweet_id')->unsigned();
            $table->string('image_file_name', 100);
            $table->string('image_file', 100);
            $table->timestamps();

            $table->index('id');
            $table->index('tweet_id');

            $table->foreign('tweet_id')
                  ->references('id')
                  ->on('tweets')
                  ->onUpdate('cascade')
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
        Schema::dropIfExists('posts_images');
    }
}
