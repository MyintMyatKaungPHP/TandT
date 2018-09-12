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
            $table->integer('user_id');
            $table->integer('package_id');
            $table->integer('route_id')->nullable();
            $table->integer('hotel_id')->nullable();
            $table->date('departure_date');
            $table->integer('qty');
            $table->double('total_price');
            $table->double('confirm_price')->nullable();
            $table->longText('user_msg')->nullable();
            $table->longText('admin_msg')->nullable();
            $table->enum('status',['pending','acknowledge','confirm'])->default('pending');
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
        Schema::dropIfExists('bookings');
    }
}
