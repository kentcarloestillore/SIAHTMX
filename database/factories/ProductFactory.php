<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'name'  => fake()->word(),
            'description' => fake()->sentence(),
            'imgUrl' => 'https://www.supermarketnews.com/sites/supermarketnews.com/files/styles/article_featured_retina/public/Product%20of%20the%20Year%20photo.png?itok=VG2vPbTq',
            'quantity' => fake()->numberBetween(10, 50),
            'price' => fake()->numberBetween(10, 50)
        ];
    }
}
