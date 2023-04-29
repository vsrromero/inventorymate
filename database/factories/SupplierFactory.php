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
        $address_name = $faker->streetName();
        $address_number = $faker->buildingNumber();

        return [
            'name' => $faker->company(), 
            'address' => $address_number . ' ' . $address_name, 
            'postcode' => $faker->postcode(), 
            'city' => $faker->city(), 
            'county' => $faker->county(), 
            'phone' => $faker->phoneNumber(),
            'email' => $faker->companyEmail(), 
            'site' => $faker->domainName(), 
            'contact_name' => $faker->name(), 
        ];
    }
}
