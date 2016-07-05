<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Organizations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organization');
            $table->string('state');
            $table->boolean('active')->nullable(); // temporary;
            $table->string('email')->unique();
            $table->string('password')->nullable(); // temporary;
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
          Schema::drop('organizations');
    }
}
