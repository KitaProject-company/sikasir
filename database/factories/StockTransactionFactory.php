<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\stock_transaction>
 */
class StockTransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $input = ['in', 'out'];
        return [
            'type' => fake()->randomElement($input),
            'quantity' => fake()->randomDigit(),
            'note' => fake()->paragraph(),
        ];
    }
}
