<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    public function definition()
    {
        return [
            'city' => fake()->city(),
            'state' => fake()->stateAbbr(),
        ];
    }
}
