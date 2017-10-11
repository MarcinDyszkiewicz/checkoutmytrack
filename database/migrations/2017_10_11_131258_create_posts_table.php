<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
//            $table->integer('id_user');
            $table->string('title');
            $table->text('content');
            $table->string('alias')->nullable();;
            $table->string('img')->nullable();
            $table->string('meta_title')->nullable();;
            $table->string('meta_img')->nullable();
            $table->string( 'meta_desc')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
