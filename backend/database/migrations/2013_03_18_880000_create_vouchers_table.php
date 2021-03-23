<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
<<<<<<< HEAD:backend/database/migrations/2013_03_18_880000_create_vouchers_table.php
            $table->id();
            $table->String('name');
            $table->String('code');
            $table->String('description');
            $table->integer('count');
            $table->integer('denominations');
=======
            $table->increments('id');
            $table->String('name');
            $table->String('code');
            $table->unsignedInteger('count')->default(1);
            $table->float('denominations');
            $table->date('start_date');
            $table->date('end_date');
>>>>>>> 81f9dac42ceea448828b9ce22812d08224572405:backend/database/migrations/2021_03_16_041614_create_vouchers_table.php
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
        Schema::dropIfExists('vouchers');
    }
}
