<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drinks', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name')->unique();
            $table->string('category');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('handle')->unique();
            $table->string('token');
            $table->timestamps();
        });

        Schema::create('configentries', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('key')->unique();
            $table->string('value');
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
        Schema::dropIfExists('drinks');
        Schema::dropIfExists('drinks');
        Schema::dropIfExists('drinks');
    }
}
