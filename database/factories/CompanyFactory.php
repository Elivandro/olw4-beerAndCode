<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    public function definition()
    {
        return [
            'commission_rate' => fake()->numberBetween(1, 6),
            'name' => fake()->company(),
        ];
    }
}
