<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrgPets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
      Schema::create('OrgPets', function ($table) {

        $table->increments('id')->unique();
        $table->integer('org_id')->unsigned()->nullable();
        $table->integer('pet_id')->unsigned()->nullable();

      });

      Schema::table('OrgPets', function(Blueprint $table)
      {
          $table->foreign('org_id')->references('id')->on('organizations');
          $table->foreign('pet_id')->references('id')->on('pets');
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
        Schema::drop('OrgPets');
    }
}
