<?php

declare(strict_types=1);

namespace App\Actions\Invoice;

use App\Models\Invoice;
use Illuminate\Support\Str;

final class StoreInvoiceAction
{
    public function handle(
        string $totalVat,
        string $totalPriceExcludingVat,
        int $userId,
    ): void {
        Invoice::create([
            'invoice_number' => Str::uuid(),
            'total_vat' => $totalVat,
            'total_price_excluding_vat' => $totalPriceExcludingVat,
            'total_price' => (float) $totalVat + (float) $totalPriceExcludingVat,
            'user_id' => $userId,
        ]);
    }
}
