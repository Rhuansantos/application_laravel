<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Volunteers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

    Schema::create('volunteers', function (Blueprint $table) {
        $table->increments('id')->unique();
        $table->integer('organization_id')->unsigned()->nullable();
        $table->string('name');
        $table->string('lastname');
        $table->boolean('active')->null();
        $table->string('email')->unique();
        $table->string('password');
        $table->rememberToken();
        $table->timestamps();
    });


    Schema::table('volunteers', function(Blueprint $table)
    {
        $table->foreign('organization_id')->references('id')->on('organizations');
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
        Schema::drop('volunteers');
    }
}
