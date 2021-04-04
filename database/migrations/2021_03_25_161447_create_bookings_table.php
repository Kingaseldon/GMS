<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->text('customer_id');
            $table->BigInteger('room_id');
            $table->text('coming');
            $table->text('going');
            $table->date('checkin');
            $table->date('checkout');
            $table->integer('people_no');
            $table->integer('duration');
            $table->text('name')->nullable();
            $table->biginteger('phone')->nullable();
            $table->string('email')->nullable();
            // $table->string('journal_no');
            // $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
