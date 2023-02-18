<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
final class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_number' => Str::uuid(),
            'total_vat' => $vat = $this->faker->randomFloat(2, 10, 300),
            'total_price_excluding_vat' => $totalPriceExcludingVat = $this->faker->randomFloat(2, 10, 1_000),
            'total_price' => $vat + $totalPriceExcludingVat,
        ];
    }
}
