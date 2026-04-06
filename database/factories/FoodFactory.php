<?php

namespace Database\Factories;

use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(3, true),
            'image' => fake()->imageUrl(300, 300, 'food', true),
            'category' => fake()->randomElement(['Hoa quả', 'Thực phẩm hữu cơ', 'Thực phẩm khô', 'Sản phẩm nổi bật']),
            'price' => fake()->numberBetween(10, 50) * 1000,
            'old_price' => fake()->numberBetween(55, 100) * 1000,
            'description' => fake()->paragraph(),
            'sodium' => fake()->numberBetween(5, 50) . 'mg',
            'fiber' => fake()->numberBetween(1, 10) . 'g',
            'vitamin_c' => fake()->numberBetween(10, 100) . 'mg',
        ];
    }
}
