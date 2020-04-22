<?php

use Illuminate\Database\Seeder;
use App\Model\ContactUs;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\ContactUs::create([
            'first_name' => 'Umar',
            'last_name' => 'Sabirin',
            'contact_number' => '+6285341770639',
            'facebook' => 'umar sabirin',
            'twitter' => 'umars28',
            'github' => 'umars28'
        ]);
    }
}
