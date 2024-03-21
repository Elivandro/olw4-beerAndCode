<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SellerFactory extends Factory
{

    public function definition()
    {
        return [
            'company_id' => fake()->numberBetween(1,4),
            'user_id' => User::factory()->create(['role_id' => fake()->numberBetween(2, 3)])
        ];
    }
}
