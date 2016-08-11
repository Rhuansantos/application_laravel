<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrganizationsPets extends Migration
{

    public function up()
    {
        //

        Schema::create('organization_pets', function ($table) {

          $table->increments('id')->unique();
          $table->integer('org_id')->unsigned()->nullable();
          $table->integer('pet_id')->unsigned()->nullable();
          $table->timestamps();

        });

        Schema::table('organization_pets', function(Blueprint $table)
        {
            $table->foreign('org_id')->references('id')->on('organizations');
            $table->foreign('pet_id')->references('id')->on('pets');
        });

    }


    public function down()
    {
        //
          Schema::drop('organization_pets');
    }
}
