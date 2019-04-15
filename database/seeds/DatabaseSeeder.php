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

        DB::table('classes')->delete();
        $this->call(ClassTableSeeder::class);

        DB::table('subjects')->delete();
        $this->call(SubjectsTableSeeder::class);

        DB::table('students')->delete();
        $this->call(StudentTableSeeder::class);
    }
}
