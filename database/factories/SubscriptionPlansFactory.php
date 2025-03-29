<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubscriptionPlans>
 */
class SubscriptionPlansFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'price' => fake()->randomFloat(2, 5, 500), 
            'duration' => fake()->randomElement(['monthly', 'yearly']), 
            'max_uploads' => fake()->numberBetween(5, 100), 
        ];
    }
}
