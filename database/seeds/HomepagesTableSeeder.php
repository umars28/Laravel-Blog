<?php

use Illuminate\Database\Seeder;
use App\Model\Homepages;
use App\Model\Media;

class HomepagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Media::create([
            'file_name'     => 'home-bg.jpg',
            'file_type'     =>  '.jpg',
            'file_size'     =>  54
        ]);

        \App\Model\Homepages::create([
            'title'         => 'Clean Blog',
            'description'   =>  'A Clean Blog Theme by Start Bootstrap',
            'media_id'      => 3
        ]);

    }
}
