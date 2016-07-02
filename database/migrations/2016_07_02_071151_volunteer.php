<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Volunteer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

    Schema::create('volunteer', function (Blueprint $table) {
        $table->increments('id')->unique();
        $table->integer('organization_id');
        $table->string('name');
        $table->string('lastname');
        $table->boolean('active')->null();
        $table->string('email')->unique();
        $table->string('password');
        $table->rememberToken();
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
        //
        Schema::drop('volunteer');
    }
}
