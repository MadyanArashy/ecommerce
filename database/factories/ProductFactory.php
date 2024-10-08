<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => 'https://placehold.co/' . rand(250, 400) . 'x' . rand(250, 400),
            'title' => fake()->unique()->name(),
            'desc' => fake()->sentence(25),
            'price' => 1000 * rand(1, 300),
            'stock' => rand(8, 120),
        ];
    }
}
