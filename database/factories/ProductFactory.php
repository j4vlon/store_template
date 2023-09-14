<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            'category_id' => Category::all()->random()->id,
            'title' => [
                'uz' => fake()->sentence(3),
                'ru' => fake()->sentence(3)
            ],
            'price' => rand(50000, 10000000),
            'description' => [
                'uz' => fake()->paragraph(5),
                'ru' => fake()->paragraph(5),
            ]
        ];
    }
}
