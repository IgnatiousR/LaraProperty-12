<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'beds'=>fake()->numberBetween(1,7),
            'baths'=>fake()->numberBetween(1,4),
            'area'=>fake()->numberBetween(50,500),
            'city'=>fake()->city(),
            'postal_code'=>fake()->postcode(),
            'address'=>fake()->address(),
            'price'=>fake()->numberBetween(50_000, 5_000_000),
        ];
    }
}
