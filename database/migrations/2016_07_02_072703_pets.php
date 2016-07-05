<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        // adicionar genre
        Schema::create('pets', function ($table) {
            $table->increments('id')->unique();
            $table->integer('organization_id')->unsigned()->nullable(); // temporary;
            $table->string('name');
            $table->string('age');
            $table->string('size');
            $table->string('pet_type');
            $table->string('breed');
            $table->text('description');
            $table->boolean('sold')->nullable(); // temporary
            $table->timestamps();
        });


        // Schema::table('pets', function(Blueprint $table)
        // {
        //     $table->foreign('organization_id')->references('id')->on('organizations');
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('pets');
    }
}
