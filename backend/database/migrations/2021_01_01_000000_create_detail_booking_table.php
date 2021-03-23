<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_booking', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_booking');
            $table->string('address');
            $table->string('user_phone');
            $table->string('photographer_phone');
            $table->string('user_name');
            $table->string('photographer_name');
            $table->string('code_voucher');
            $table->string('name_style');
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
        Schema::dropIfExists('detail_booking');
    }
}
