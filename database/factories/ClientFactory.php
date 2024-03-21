<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{

    public function definition()
    {
        return [
            'address_id' => fake()->numberBetween(1, 10),
            'user_id' => User::factory()->create(['role_id' => 4])
        ];
    }
}
