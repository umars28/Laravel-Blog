<?php

use Illuminate\Database\Seeder;
use App\Model\Homepages;

class HomepagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Homepages::create([
            'title'         => 'Clean Blog',
            'description'   =>  'A Clean Blog Theme by Start Bootstrap'
        ]);

    }
}
