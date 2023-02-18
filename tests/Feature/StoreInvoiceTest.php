<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class StoreInvoiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_stores_an_invoice(): void
    {
        $this->actingAs(
            user: User::factory()->create(),
        )
            ->postJson(
                uri: route(
                    name: 'invoices.store',
                ),
                data: [
                    'total_vat' => '50.00',
                    'total_price_excluding_vat' => '130.29',
                ],
            )
            ->assertStatus(
                status: 200,
            )
            ->assertJson(
                value: static fn (AssertableJson $json) => $json
                    ->has('data.0', fn (AssertableJson $json) => $json
                        ->has('id')
                        ->has('total_price')
                        ->has('user'),
                    ),
            );
    }
}
