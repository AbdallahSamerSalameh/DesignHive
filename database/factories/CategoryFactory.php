<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
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
            'image' => 'https://picsum.photos/id/'.rand(100, 200).'/800/600',
            'format' => fake()->randomElement(['png', 'jpg']),
            'description' => fake()->realText(),
            'admin_id' => fake()->numberBetween(1,2),

        ];
    }
}
