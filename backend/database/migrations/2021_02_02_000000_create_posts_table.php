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
<<<<<<< HEAD:backend/database/migrations/2021_02_02_000000_create_posts_table.php
            $table->id();
            $table->foreignId('id_photographer');
=======
            $table->increments('id');
            $table->String('title');
            $table->longText('content');
            $table->String('image');
            $table->foreignId('photographer_id');
            $table->foreignId('style_id');
>>>>>>> 81f9dac42ceea448828b9ce22812d08224572405:backend/database/migrations/2021_03_16_040827_create_posts_table.php
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
