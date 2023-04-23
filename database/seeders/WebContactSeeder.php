<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\WebContact;

class WebContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WebContact::factory()->count(10)->create();
    }
}
