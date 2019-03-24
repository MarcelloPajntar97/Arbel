<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //send data
        DB::table('users')->delete();
        $this->call(UsersTableSeeder::class);
    }
}
