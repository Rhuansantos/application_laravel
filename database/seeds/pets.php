<?php

use Illuminate\Database\Seeder;
use Faker\Factory as factory;

class Pets extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pets')->insert([
          'name' => str_random(10),
          // 'pet_type' => str_random(10),
          // 'breed' => str_random(10),
          // 'description' => str_random(10),
          // 'age' => str_random(10),
          // 'size' => str_random(10),
      ]);


      factory(App\Pet::class, 100)->create();

    }
}
