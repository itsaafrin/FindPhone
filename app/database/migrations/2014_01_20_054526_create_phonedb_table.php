<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonedbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phonedb', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name', 30);
            $table->integer('social_security')->nullable();
            $table->integer('phone')->unique();
            $table->string('email', 30);
            $table->string('address', 50);
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
        Schema::drop('phonedb');
    }

}
