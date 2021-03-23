<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD:backend/database/migrations/2021_03_23_024144_create_detail_post_table.php
class CreateDetailPostTable extends Migration
=======
class CreateBookingTable extends Migration
>>>>>>> 81f9dac42ceea448828b9ce22812d08224572405:backend/database/migrations/2021_03_16_044012_create_booking_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:backend/database/migrations/2021_03_23_024144_create_detail_post_table.php
        Schema::create('detail_post', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->string('image');
            $table->foreignId('id_post');
=======
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('user_id');
            $table->foreignId('photographer_id');
            $table->dateTime('create_time');
            $table->foreignId('combo_id');
            $table->boolean('is_cancel')->default(false);
>>>>>>> 81f9dac42ceea448828b9ce22812d08224572405:backend/database/migrations/2021_03_16_044012_create_booking_table.php
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
<<<<<<< HEAD:backend/database/migrations/2021_03_23_024144_create_detail_post_table.php
        Schema::dropIfExists('detail_post');
=======
        Schema::dropIfExists('booking');
>>>>>>> 81f9dac42ceea448828b9ce22812d08224572405:backend/database/migrations/2021_03_16_044012_create_booking_table.php
    }
}
