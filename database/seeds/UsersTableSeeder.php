<?php

use Illuminate\Database\Seeder;
use App\Model\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'admin blog',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);
    }
}
