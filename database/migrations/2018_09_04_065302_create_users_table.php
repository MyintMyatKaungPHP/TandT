<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role',['admin','editor','user'])->default('user');
            $table->integer('phone');
            $table->longText('address');
            $table->string('image')->nullable();
            $table->enum('ban_status',['0','1'])->default('0');
            $table->string('remember_token');
            $table->timestamps();
        });
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
