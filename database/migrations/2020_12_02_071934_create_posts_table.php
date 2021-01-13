<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('cat_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->string('image');
            $table->timestamps();
             //$table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
             //$table->foreign('cat_id')->on('catagories')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
