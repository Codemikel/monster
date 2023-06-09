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
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'flavor' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 20000, 80000),
            'image_path' => $this->faker->imageUrl(640, 480, 'animals', true)
        ];
    }
}
