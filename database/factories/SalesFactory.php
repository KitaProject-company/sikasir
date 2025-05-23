<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sales>
 */
class SalesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $total = $this->faker->numberBetween(10000, 500000);
        $payment = $total + rand(0, 50000);
        return [
            'total_price' => $total,
            'payment_amount' => $payment,
            'change' => $payment - $total,
        ];
    }
}
