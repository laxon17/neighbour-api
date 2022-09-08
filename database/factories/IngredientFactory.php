<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingredient>
 */
class IngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'thumbnail' => fake()->word(),
            'description' => fake()->paragraph(),
            'unit_price' => 129.99,
            'ingredient_category_id' => rand(1,4)
        ];
    }
}
