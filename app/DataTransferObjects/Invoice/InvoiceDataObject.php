<?php

declare(strict_types=1);

namespace App\DataTransferObjects\Invoice;

final class InvoiceDataObject
{
    public function __construct(
        private readonly string $totalVat,
        private readonly string $totalPriceExcludingVat,
        private readonly int $userId,
    ) {
    }

    /**
     * @return array{totalVat: string, totalPriceExcludingVat: string, userId: int}
     */
    public function toArray(): array
    {
        return [
            'totalVat' => $this->totalVat,
            'totalPriceExcludingVat' => $this->totalPriceExcludingVat,
            'userId' => $this->userId,
        ];
    }
}
