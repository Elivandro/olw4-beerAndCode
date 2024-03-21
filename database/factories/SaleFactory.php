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
        $company_id = fake()->numberBetween(1, 4);

        return [
            'seller_id' => Seller::Factory()->create(['company_id' => $company_id]),
            'client_id' => Client::factory()->create(['company_id' => $company_id]),
            'sold_at' => fake()->dateTimeBetween('-8 years', '-1 year'),
            'total_amount' => fake()->numberBetween(10000, 50000),
            'status' => fake()->randomElement(Status::cases())
        ];
    }
}
