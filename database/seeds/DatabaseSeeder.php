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
         $this->call(UsersTableSeeder::class);
         $this->call(HomepagesTableSeeder::class);
         $this->call(AboutTableSeeder::class);
         $this->call(ContactTableSeeder::class);
    }
}
