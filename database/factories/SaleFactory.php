<?php

namespace Database\Factories;

use App\Enums\Status;
use App\Models\Client;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    public function definition()
    {
        return [
            'seller_id' => Seller::Factory(),
            'client_id' => Client::factory(),
            'sold_at' => fake()->dateTimeBetween('-8 years', '-1 year'),
            'total_amount' => fake()->numberBetween(10000, 50000),
            'status' => fake()->randomElement(Status::cases())
        ];
    }
}
