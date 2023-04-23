<?php

namespace Database\Factories;

use App\Models\WebContact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


class WebContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = WebContact::class;

    public function definition()
    {
        $faker = \Faker\Factory::create('en_GB');
        return [
            'name' => $faker->name(),
            'phone' => $faker->phoneNumber(),
            'email' => $faker->email(),
            'subject' => $faker->randomElement(['doubt', 'compliment', 'complaint']),
            'message' => $faker->paragraph(2)
        ];
    }
}
