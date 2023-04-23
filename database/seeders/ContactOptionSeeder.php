<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\ContactOption;

class ContactOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factory = ContactOption::factory();

        $factory->state([
            'option_value' => 'doubt',
            'option_description' => 'Doubt',
        ])->create();
        
        $factory->state([
            'option_value' => 'compliment',
            'option_description' => 'Compliment',
        ])->create();

        $factory->state([
            'option_value' => 'complaint',
            'option_description' => 'Complaint',
        ])->create();
    }
}
