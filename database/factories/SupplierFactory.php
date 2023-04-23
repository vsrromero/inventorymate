<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Supplier::class;

    public function definition()
    {
        $faker = \Faker\Factory::create('en_GB');
        return [
            'name' => $faker->company(),
            'address' => $faker->address(),
            'phone' => $faker->phoneNumber(),
            'email' => $faker->companyEmail(),
            'contact_name' => $faker->name(),
        ];
    }
}
