<?php

namespace Database\Factories;

use App\Models\ContactOption;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactOptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = ContactOption::class;

    public function definition()
    {
        return [
            'option_value' => 'doubt',
            'option_description' => 'Doubt',
        ];
    }

    public function compliment()
    {
        return $this->state(function (array $attributes) {
            return [
                'option_value' => 'compliment',
                'option_description' => 'Compliment',
            ];
        });
    }

    public function complaint()
    {
        return $this->state(function (array $attributes) {
            return [
                'option_value' => 'complaint',
                'option_description' => 'Complaint',
            ];
        });
    }
}
