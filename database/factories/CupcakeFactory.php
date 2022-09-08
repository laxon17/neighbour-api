<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cupcake>
 */
class CupcakeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'wrap_id' => rand(1,4),
            'cake_id' => rand(5,8),
            'frosting_id' => rand(9,12),
            'topping_id' => rand(13,15)
        ];
    }
}
