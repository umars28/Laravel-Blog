<?php

use Illuminate\Database\Seeder;
use App\Model\User;
use App\Model\Media;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Media::create([
            'file_name' => 'umar.jpg',
            'file_type' => '.jpg',
            'file_size' => 12
        ]);

        \App\User::create([
            'name' => 'admin blog',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'media_id' => 25
        ]);
    }
}
