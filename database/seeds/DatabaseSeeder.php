<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(pets::class);

        DB::table('organizations')->insert([

          'organization' => 'org1',
          'state' => 'fl',
          'email' => 'rhuansantosdev@gmail.com',
          'password' => Hash::make('123456'),
        ]);


    }
}
